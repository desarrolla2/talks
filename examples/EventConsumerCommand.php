<?php

namespace CoreBundle\Command\Async;

use CoreBundle\Command\AbstractCommand;
use CoreBundle\EventDispatcher\AsyncEvent;
use CoreBundle\EventDispatcher\CoreEvent;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Filesystem\LockHandler;


class EventConsumerCommand extends AbstractCommand
{
    /** @var LockHandler */
    protected $lockHandler;

    /** @var AsyncEvent */
    protected $asyncEvent;

    /** @var string */
    protected $eventName;

    /** @var array */
    protected $debug = [];

    public function execute(InputInterface $input, OutputInterface $output)
    {
        if ($this->thereAreAnActiveDeploy()) {
            $this->output->writeln(sprintf('avoid execution when there are an active deploy'));
            $this->finalize();

            return;
        }
        if (!$this->getLock()) {
            $this->output->writeln(sprintf('cant get lock'));
            $this->finalize();

            return;
        }

        $dispatcher = $this->getContainer()->get('event_dispatcher');
        $em = $this->getContainer()->get('doctrine.orm.entity_manager');

        try {
            $this->asyncEvent = $em->getRepository('CoreBundle:AsyncEvent')->findFirst();
        } catch (\Exception $e) {
            return 0;
        }

        if (!$this->asyncEvent) {
            return 0;
        }
        $entity = $em->getRepository($this->asyncEvent->getClass())->find($this->asyncEvent->getItem());
        if (!$entity) {
            $this->em->remove($this->asyncEvent);
            $this->em->flush();
            throw new \RuntimeException(
                'Entity not found "%s"::%d',
                $this->asyncEvent->getClass(),
                $this->asyncEvent->getItem()
            );
        }
        if (!$this->asyncEvent->getStartAt()) {
            $this->asyncEvent->setStartAt(new \DateTime());
            $em->persist($this->asyncEvent);
            $em->flush();
        }

        try {
            $dispatcher->dispatch(
                $this->asyncEvent->getName(),
                new GenericEvent(
                    $entity,
                    \GuzzleHttp\json_decode($this->asyncEvent->getData(), true)
                )
            );
        } catch (\Exception $e) {
            $this->notifyErrorToDevelopers($e);
        }
        $this->finalize();
    }

    public function handleShutdown()
    {
        $error = error_get_last();
        if ($error === null) {
            return;
        }
        $e = new \Exception(
            json_encode($error)
        );
        $this->notifyErrorToDevelopers($e);
    }

    private function notifyErrorToDevelopers(\Exception $exception)
    {
        $this->output->writeln(sprintf('attempting to notify to developers'));
        $mailer = $this->getContainer()->get('desarrolla2.exception_listener.mailer');
        $data = ['name' => $this->eventName, 'debug' => $this->debug];
        if ($this->asyncEvent) {
            $data = array_merge(
                [
                    'id' => $this->asyncEvent->getId(),
                    'class' => $this->asyncEvent->getClass(),
                    'data' => $this->asyncEvent->getData(),
                ]
            );
        }
        /** @var \CoreBundle\EventDispatcher\CoreEvent $event */
        try {
            $mailer->notify($exception, $data);
        } catch (\Exception $mailerException) {

        }

        throw $exception;
    }

    protected function configure()
    {
        $this
            ->setName('consumer:async:events')
            ->addOption('event', null, InputOption::VALUE_REQUIRED);
    }

    protected function finalize()
    {
        if ($this->asyncEvent) {
            $this->em->remove($this->asyncEvent);
            $this->em->flush();
        }
        if ($this->lockHandler) {
            $this->lockHandler->release();
        }

        parent::finalize();
    }

    protected function getLock()
    {
        $this->lockHandler = new LockHandler('async_event', $this->getContainer()->getParameter('kernel.cache_dir'));
        if (!$this->lockHandler->lock()) {
            return false;
        }

        return true;
    }

    protected function initialize(InputInterface $input, OutputInterface $output)
    {
        register_shutdown_function([$this, 'handleShutdown']);
        $this->debug[] = 'parent pre initialize';
        parent::initialize($input, $output);
        $this->debug[] = 'parent post initialize';
    }

    /**
     * @return bool
     */
    protected function thereAreAnActiveDeploy()
    {
        return is_dir(sprintf('%s/../../release', $this->getContainer()->getParameter('kernel.project_dir')));
    }
}