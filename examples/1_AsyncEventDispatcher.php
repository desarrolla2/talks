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
    private $em;

    /**
     * AsyncEventDispatcher constructor.
     * @param EntityManager $em
     */
    public function __construct(EntityManager $em)
    {
        $this->em = $em;
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
        $data = array_merge(
            [
                'request_base_url' => $this->getBaseUrl(),
                'notify_to_user_id' => $this->getUserId(),
            ],
            $event->getData()
        );
        $event = new AsyncEvent($eventName, get_class($event->getSubject()), $event->getId(), $data);
        $this->em->persist($event);
        $this->em->flush();

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
