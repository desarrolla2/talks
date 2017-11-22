<?php

namespace CoreBundle\EventDispatcher;

use OldSound\RabbitMqBundle\RabbitMq\ConsumerInterface;
use PhpAmqpLib\Message\AMQPMessage;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\Process\Process;

/**
 * EventConsumer.
 */
class AsyncEventConsumer1 implements ConsumerInterface
{
    /** @var  ContainerInterface */
    protected $container;

    /** @var AsyncEventDispatcher */
    private $eventDispatcher;

    /**
     * @param EventDispatcherInterface $eventDispatcher
     */
    public function __construct(ContainerInterface $container, EventDispatcherInterface $eventDispatcher)
    {
        $this->container = $container;
        $this->eventDispatcher = $eventDispatcher;
    }

    /**
     * @param \PhpAmqpLib\Message\AMQPMessage $msg
     *
     * @return bool
     */
    public function execute(AMQPMessage $msg)
    {
        $output = new ConsoleOutput();
        $asyncEvent = unserialize($msg->body);

        $cmd = sprintf(
            'php %s/bin/console async:event:execute %s %s %s --env=%s',
            $this->container->getParameter('core.project.path'),
            $asyncEvent->getName(),
            $asyncEvent->getSubject(),
            base64_encode(serialize($asyncEvent->getArgument())),
            $this->container->getParameter('kernel.environment')
        );

        $output->writeln($cmd);
        $process = new Process($cmd);
        $process->setTimeout(60 * 15);
        $process->run();
        if (!$process->isSuccessful()) {
            $this->notifyErrorToDevelopers($name, $event, $process);
            $output->writeln($process->getErrorOutput());
        }
        $output->writeln($process->getOutput());

        return true;
    }

    /**
     * @param string $name
     * @param \CoreBundle\EventDispatcher\CoreEvent $event
     * @param \Symfony\Component\Process\Process $process
     */
    private function notifyErrorToDevelopers(string $name, CoreEvent $event, Process $process)
    {
        $mailer = $this->container->get('desarrolla2.exception_listener.mailer');
        /** @var \CoreBundle\EventDispatcher\CoreEvent $event */
        try {
            $mailer->notify(
                new \Exception(sprintf('Ha ocurrido un error en la ejecución del evento %s', $name)),
                [
                    'output' => $process->getOutput(),
                    'output.error' => $process->getErrorOutput(),
                    'event.name' => $name,
                    'event.item' => $event->getItem(),
                    'event.data' => $event->getData(),
                ]
            );
        } catch (\Exception $e) {

        }
    }
}