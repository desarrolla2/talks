<?php

namespace CoreBundle\Entity;

use Symfony\Component\EventDispatcher\GenericEvent;

class AsyncGenericEvent extends GenericEvent
{
    protected $id;
    protected $name;
    protected $entityClass;
    protected $entityId;
    protected $arguments = '';

    public function __construct($subject = null, array $arguments = array())
    {
        parent::__construct($subject, $arguments);
        if ($subject) {
            $this->entityClass = get_class($subject);
            $this->entityId = $subject->getId();
        }
        $this->arguments = \GuzzleHttp\json_encode($arguments);
    }
}