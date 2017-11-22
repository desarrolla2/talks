<?php

class ImageSubscriber implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            CoreEvents::IMAGE_CREATED => 'onCreated',
        ];
    }

    public function onCreated(GenericEvent $event)
    {
        $entity = $event->getSubject();

        $this->manager->createThumbnails($entity);
        $this->manager->rateImage($entity);
        // ...
        $this->manager->updateFeed($this->getUser());
    }
}