<?php

namespace CoreBundle\Entity;

class AsyncEvent
{
    protected $id;
    protected $name;
    protected $entityClass;
    protected $entityId;
    protected $data = '';
}