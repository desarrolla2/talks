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
        $asyncEvent = unserialize($msg->body);
        $dispatcher = $this->getContainer()->get('event_dispatcher');
        try {
            $dispatcher->dispatch(
                $asyncEvent->getName(),
                new GenericEvent(
                    $asyncEvent->getSubject(),
                    $asyncEvent->getArgument()
                )
            );
        } catch (\Exception $e) {
            $this->notifyErrorToDevelopers($e);
        }

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