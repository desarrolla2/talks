<?php

namespace CoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="async_event")
 * @ORM\Entity(repositoryClass="CoreBundle\Entity\Repository\AsyncEventRepository")
 */
class AsyncEvent
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @ORM\Column(type="string")
     */
    protected $entityClass;

    /**
     * @ORM\Column(type="integer")
     */
    protected $entityID;

    /**
     * @ORM\Column(type="text")
     */
    protected $data = '';
}