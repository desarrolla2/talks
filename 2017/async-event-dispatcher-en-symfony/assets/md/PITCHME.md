
<span class="menu-title" style="display: none">title</span>

# Async Event Dispatcher en Symfony2

---
<span class="menu-title" style="display: none">bio</span>

## Daniel González

### @desarrolla2

10 años programando principalmente con php y symfony

Actualmente trabajando en https://devtia.com

---
<span class="menu-title" style="display: none">objetivo</span>

## Objetivo

- Aproximación teorico-practica a una implementación de un gestor de eventos asyncronos en symfony2
- Ejemplos:
    - Básico ( MYSQL + CRON )
    - Avanzado ( RabbitMQ + Supervisor )
---
<span class="menu-title" style="display: none">event dispatcher</span>

## EventDispatcher

- Componente de Symfony2
- Implementación del patrón observer
- Eventos
    - nombre único
- Event Dispatcher
- Listeners / Subscribers
    - método callback
    - prioridad
    
---

<span class='menu-title' style='display: none'>ImageController 1</span>
<span class='slide-title'>ImageController 1</span>
```php
<?php

class ImageController extends AbstractController
{
    public function createAction(Request $request)
    {
        $form = $this->getFormForCreateImage();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $manager = $this->get('app.service.image_manager');
            $entity = $form->getData();
            $manager->persist($entity, true);

            $this->createThumbnails($entity);
            $this->rateImage($entity);
            // ...
            $this->updateFeed($this->getUser());

            $this->addFlash('success', 'image uploaded successfully');

            return $this->redirectToRoute('_app.image.view', ['id' => $entity->getId()]);
        }
    }
}
```


<span class="code-presenting-annotation fragment current-only" data-code-focus="5"></span>
<span class="code-presenting-annotation fragment current-only" data-code-focus="7-9"></span>
<span class="code-presenting-annotation fragment current-only" data-code-focus="14"></span>
<span class="code-presenting-annotation fragment current-only" data-code-focus="15"></span>
<span class="code-presenting-annotation fragment current-only" data-code-focus="17"></span>
<span class="code-presenting-annotation fragment current-only" data-code-focus="21"></span>

---

<span class='menu-title' style='display: none'>ImageController 2</span>
<span class='slide-title'>ImageController 2</span>
```php
<?php

class ImageController extends AbstractController
{
    public function createAction(Request $request)
    {
        $form = $this->getFormForCreateImage();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $manager = $this->get('app.service.image_manager');
            $dispatcher = $this->get('event_dispatcher');
            $entity = $form->getData();
            $manager->persist($entity, true);

            $dispatcher->dispatch(CoreEvents::IMAGE_CREATED, new GenericEvent($entity));

            $this->addFlash('success', 'image uploaded successfully');

            return $this->redirectToRoute('_app.image.view', ['id' => $entity->getId()]);
        }
    }
}
```


<span class="code-presenting-annotation fragment current-only" data-code-focus="11"></span>
<span class="code-presenting-annotation fragment current-only" data-code-focus="15"></span>
<span class="code-presenting-annotation fragment current-only" data-code-focus="19"></span>

---

<span class='menu-title' style='display: none'>GenericEvent</span>
<span class='slide-title'>GenericEvent</span>
```php
<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\EventDispatcher;

/**
 * Event encapsulation class.
 *
 * Encapsulates events thus decoupling the observer from the subject they encapsulate.
 *
 * @author Drak <drak@zikula.org>
 */
class GenericEvent extends Event implements \ArrayAccess, \IteratorAggregate
{
    /**
     * Event subject.
     *
     * @var mixed usually object or callable
     */
    protected $subject;

    /**
     * Array of arguments.
     *
     * @var array
     */
    protected $arguments;

    /**
     * Encapsulate an event with $subject and $args.
     *
     * @param mixed $subject   The subject of the event, usually an object
     * @param array $arguments Arguments to store in the event
     */
    public function __construct($subject = null, array $arguments = array())
    {
        $this->subject = $subject;
        $this->arguments = $arguments;
    }

    /**
     * Getter for subject property.
     *
     * @return mixed $subject The observer subject
     */
    public function getSubject()
    {
        return $this->subject;
    }

    /**
     * Get argument by key.
     *
     * @param string $key Key
     *
     * @return mixed Contents of array key
     *
     * @throws \InvalidArgumentException if key is not found
     */
    public function getArgument($key)
    {
        if ($this->hasArgument($key)) {
            return $this->arguments[$key];
        }

        throw new \InvalidArgumentException(sprintf('Argument "%s" not found.', $key));
    }

    /**
     * Add argument to event.
     *
     * @param string $key   Argument name
     * @param mixed  $value Value
     *
     * @return $this
     */
    public function setArgument($key, $value)
    {
        $this->arguments[$key] = $value;

        return $this;
    }

    /**
     * Getter for all arguments.
     *
     * @return array
     */
    public function getArguments()
    {
        return $this->arguments;
    }

    /**
     * Set args property.
     *
     * @param array $args Arguments
     *
     * @return $this
     */
    public function setArguments(array $args = array())
    {
        $this->arguments = $args;

        return $this;
    }

    /**
     * Has argument.
     *
     * @param string $key Key of arguments array
     *
     * @return bool
     */
    public function hasArgument($key)
    {
        return array_key_exists($key, $this->arguments);
    }

    /**
     * ArrayAccess for argument getter.
     *
     * @param string $key Array key
     *
     * @return mixed
     *
     * @throws \InvalidArgumentException if key does not exist in $this->args
     */
    public function offsetGet($key)
    {
        return $this->getArgument($key);
    }

    /**
     * ArrayAccess for argument setter.
     *
     * @param string $key   Array key to set
     * @param mixed  $value Value
     */
    public function offsetSet($key, $value)
    {
        $this->setArgument($key, $value);
    }

    /**
     * ArrayAccess for unset argument.
     *
     * @param string $key Array key
     */
    public function offsetUnset($key)
    {
        if ($this->hasArgument($key)) {
            unset($this->arguments[$key]);
        }
    }

    /**
     * ArrayAccess has argument.
     *
     * @param string $key Array key
     *
     * @return bool
     */
    public function offsetExists($key)
    {
        return $this->hasArgument($key);
    }

    /**
     * IteratorAggregate for iterating over the object like an array.
     *
     * @return \ArrayIterator
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->arguments);
    }
}

```


<span class="code-presenting-annotation fragment current-only" data-code-focus="12"></span>
<span class="code-presenting-annotation fragment current-only" data-code-focus="43-47"></span>

---

<span class='menu-title' style='display: none'>ImageSubscriber</span>
<span class='slide-title'>ImageSubscriber</span>
```php
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
```


<span class="code-presenting-annotation fragment current-only" data-code-focus="3"></span>
<span class="code-presenting-annotation fragment current-only" data-code-focus="5"></span>
<span class="code-presenting-annotation fragment current-only" data-code-focus="7-9"></span>
<span class="code-presenting-annotation fragment current-only" data-code-focus="12-20"></span>

---

## Implementación básica

- Los eventos se guardan en una base de datos
- Se consumen mediante a un comando
- El comando se programa en el cron para ejecutarse periodicamente.

---

<span class='menu-title' style='display: none'>AsyncGenericEvent</span>
<span class='slide-title'>AsyncGenericEvent</span>
```php
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
```


<span class="code-presenting-annotation fragment current-only" data-code-focus="7"></span>
<span class="code-presenting-annotation fragment current-only" data-code-focus="11-12"></span>
<span class="code-presenting-annotation fragment current-only" data-code-focus="13"></span>
<span class="code-presenting-annotation fragment current-only" data-code-focus="15-23"></span>

---

<span class='menu-title' style='display: none'>AsyncEventDispatcher 1</span>
<span class='slide-title'>AsyncEventDispatcher 1</span>
```php
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
        $arguments = array_merge(
            [
                'request_base_url' => $this->getBaseUrl(),
                'notify_to_user_id' => $this->getUserId(),
            ],
            $event->getArguments()
        );
        $event = new AsyncGenericEvent($eventName, $event->getSubject(), $arguments);
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

```


<span class="code-presenting-annotation fragment current-only" data-code-focus="14"></span>
<span class="code-presenting-annotation fragment current-only" data-code-focus="37"></span>
<span class="code-presenting-annotation fragment current-only" data-code-focus="39-45"></span>
<span class="code-presenting-annotation fragment current-only" data-code-focus="46"></span>
<span class="code-presenting-annotation fragment current-only" data-code-focus="47-48"></span>

---

<span class='menu-title' style='display: none'>ImageController 3</span>
<span class='slide-title'>ImageController 3</span>
```php
<?php

class ImageController extends AbstractController
{
    public function createAction(Request $request)
    {
        $form = $this->getFormForCreateImage();
        $form->handleRequest($request);
        if ($form->isSubmitted() && $form->isValid()) {
            $manager = $this->get('app.service.image_manager');
            // $dispatcher = $this->get('event_dispatcher');
            $dispatcher = $this->get('app.async_event_dispatcher');
            $entity = $form->getData();
            $manager->persist($entity, true);

            $dispatcher->dispatch(CoreEvents::IMAGE_CREATED, new GenericEvent($entity));

            $this->addFlash('success', 'image uploaded successfully');

            return $this->redirectToRoute('_app.image.view', ['id' => $entity->getId()]);
        }
    }
}
```


<span class="code-presenting-annotation fragment current-only" data-code-focus="11-12"></span>

---

<span class='menu-title' style='display: none'>EventConsumerCommand</span>
<span class='slide-title'>EventConsumerCommand</span>
```php
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

        $dispatcher = $this->getContainer()->get('event_dispatcher');
        try {
            $dispatcher->dispatch(
                $this->asyncEvent->getName(),
                new GenericEvent(
                    $entity,
                    $this->asyncEvent->getData()
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
```


<span class="code-presenting-annotation fragment current-only" data-code-focus="14"></span>
<span class="code-presenting-annotation fragment current-only" data-code-focus="30-35"></span>
<span class="code-presenting-annotation fragment current-only" data-code-focus="36-42"></span>
<span class="code-presenting-annotation fragment current-only" data-code-focus="43-46"></span>
<span class="code-presenting-annotation fragment current-only" data-code-focus="53"></span>
<span class="code-presenting-annotation fragment current-only" data-code-focus="69"></span>
<span class="code-presenting-annotation fragment current-only" data-code-focus="71-77"></span>
<span class="code-presenting-annotation fragment current-only" data-code-focus="79"></span>
<span class="code-presenting-annotation fragment current-only" data-code-focus="84"></span>

---

### Ventajas

- Sencillo de implementar y de mantener
- No requiere añadir nuevos elementos de arquitectura

### Incovenientes

- La ejecución no es instantanea 

---

## Implementación avanzada

- Los eventos se envían a rabbitMQ
- RabbitMQBundle

---

<span class='menu-title' style='display: none'>AsyncEventDispatcher 2</span>
<span class='slide-title'>AsyncEventDispatcher 2</span>
```php
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

```


<span class="code-presenting-annotation fragment current-only" data-code-focus="35"></span>
<span class="code-presenting-annotation fragment current-only" data-code-focus="54-66"></span>
<span class="code-presenting-annotation fragment current-only" data-code-focus="64"></span>

---

<span class='menu-title' style='display: none'>AsyncEventConsumer 1</span>
<span class='slide-title'>AsyncEventConsumer 1</span>
```php
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
```


<span class="code-presenting-annotation fragment current-only" data-code-focus="15"></span>
<span class="code-presenting-annotation fragment current-only" data-code-focus="37"></span>
<span class="code-presenting-annotation fragment current-only" data-code-focus="39"></span>
<span class="code-presenting-annotation fragment current-only" data-code-focus="40-48"></span>

---

<span class='menu-title' style='display: none'>AsyncEventConsumer 2</span>
<span class='slide-title'>AsyncEventConsumer 2</span>
```php
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
```


<span class="code-presenting-annotation fragment current-only" data-code-focus="40"></span>
<span class="code-presenting-annotation fragment current-only" data-code-focus="42-49"></span>
<span class="code-presenting-annotation fragment current-only" data-code-focus="52-58"></span>

---

<span class='menu-title' style='display: none'>supervisor.conf</span>
<span class='slide-title'>supervisor.conf</span>
```
; supervisor config file

[unix_http_server]
file=/var/run/supervisor.sock   ; (the path to the socket file)
chmod=0700                       ; sockef file mode (default 0700)

[supervisord]
logfile=/var/log/supervisor/supervisord.log ; (main log file;default $CWD/supervisord.log)
pidfile=/var/run/supervisord.pid ; (supervisord pidfile;default supervisord.pid)
childlogdir=/var/log/supervisor            ; ('AUTO' child log dir, default $TEMP)

; the below section must remain in the config file for RPC
; (supervisorctl/web interface) to work, additional interfaces may be
; added by defining them in separate rpcinterface: sections
[rpcinterface:supervisor]
supervisor.rpcinterface_factory = supervisor.rpcinterface:make_main_rpcinterface

[supervisorctl]
serverurl=unix:///var/run/supervisor.sock ; use a unix:// URL  for a unix socket

; The [include] section can just contain the "files" setting.  This
; setting can list multiple files (separated by whitespace or
; newlines).  It can also contain wildcards.  The filenames are
; interpreted as relative to this file.  Included files *cannot*
; include files themselves.

[inet_http_server]
port = *:9001
username = root
password = 'YourPasswordHere'

[program:async_dispatcher]
command=php /var/www/html/prepanel/current/bin/console rabbitmq:consumer async_dispatcher -m 1 --env=prod
directory=/tmp
autostart=true
autorestart=true
startsecs=3
startretries=1000
stdout_logfile=/var/www/html/prepanel/current/var/logs/async_dispatcher.log
stderr_logfile=/var/www/html/prepanel/current/var/logs/async_dispatcher.error.log
serverurl=AUTO
process_name=%(program_name)s_%(process_num)02d
numprocs=5

[include]
files = /etc/supervisor/conf.d/*.conf

```


<span class="code-presenting-annotation fragment current-only" data-code-focus="32"></span>
<span class="code-presenting-annotation fragment current-only" data-code-focus="33"></span>
<span class="code-presenting-annotation fragment current-only" data-code-focus="36"></span>
<span class="code-presenting-annotation fragment current-only" data-code-focus="39-40"></span>
<span class="code-presenting-annotation fragment current-only" data-code-focus="42-43"></span>

---
### Ventajas

- Ejecución en paralelo
- Ejecución instantanea
- Escalabilidad horizontal

### Incovenientes

- Añade elementos de arquitectura
- Complica la depuración de errores
- Complica el deploy

---