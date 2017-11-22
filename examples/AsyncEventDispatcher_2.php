<?php

namespace CoreBundle\EventDispatcher;

use OldSound\RabbitMqBundle\RabbitMq\Producer;
use Symfony\Component\EventDispatcher\Event;
use Symfony\Component\EventDispatcher\EventDispatcherInterface;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Intl\Exception\NotImplementedException;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use Symfony\Component\Routing\RouterInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;

class AsyncEventDispatcher implements EventDispatcherInterface
{
    /** @var Producer */
    private $producer;

    /** @var \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage */
    private $storage;

    /** @var RouterInterface */
    private $router;

    /** @var array */
    private $events;

    /**
     * AsyncEventDispatcher constructor.
     *
     * @param Producer $producer
     * @param TokenStorage $storage
     * @param RouterInterface $router
     */
    public function __construct(Producer $producer, TokenStorage $storage, RouterInterface $router)
    {
        $this->producer = $producer;
        $this->storage = $storage;
        $oClass = new \ReflectionClass(new AsyncEvents());
        $this->events = $oClass->getConstants();
        $this->router = $router;
    }

    public function addListener($eventName, $listener, $priority = 0)
    {
        throw new NotImplementedException();
    }

    public function addSubscriber(EventSubscriberInterface $subscriber)
    {
        throw new NotImplementedException();
    }

    public function dispatch($eventName, Event $event = null)
    {
        $arguments = array_merge(
            [
                'request_base_url' => $this->getBaseUrl(),
                'notify_to_user_id' => $this->getUserId(),
            ],
            $event->getData()
        );
        $event = new AsyncGenericEvent($eventName, $event->getSubject(), $arguments);
        $this->producer->publish(serialize($event));

    }

    public function getBaseUrl()
    {
        return $this->router->generate('_panel.default.index', [], UrlGeneratorInterface::ABSOLUTE_URL);
    }

    public function getListenerPriority($eventName, $listener)
    {
        throw new NotImplementedException();
    }

    public function getListeners($eventName = null)
    {
        throw new NotImplementedException();
    }

    public function hasListeners($eventName = null)
    {
        throw new NotImplementedException();
    }

    public function removeListener($eventName, $listener)
    {
        throw new NotImplementedException();
    }

    public function removeSubscriber(EventSubscriberInterface $subscriber)
    {
        throw new NotImplementedException();
    }

    /**
     * @return bool
     */
    protected function getUserId()
    {
        if (null === $token = $this->storage->getToken()) {
            return false;
        }

        /** @var \CoreBundle\Entity\User $user */
        if (!is_object($user = $token->getUser())) {
            return false;
        }

        return $user->getId();
    }
}
