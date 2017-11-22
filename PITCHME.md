---
@title[title]

# Async Event Dispatcher en Symfony2

---
@title[bio]

## Daniel González

### @desarrolla2

10 años programando principalmente con php y symfony
Actualmente trabajando en http://devtia.com
---
@title[objetivo]

## Objetivo

- Aproximación teorico-practica a una implementación de un gestor de eventos asyncronos en symfony2
- Ejemplos:
    - Básico
    - Avanzado    
---
@title[patron observador 1]

## Patrón Observador

> The observer pattern is a software design pattern in which an object, called the subject, maintains a list of its 
dependents, called observers, and notifies them automatically of any state changes, usually by calling one of their 
methods

---
@title[patron observador 2]

## Patrón Observador

- *Subject*
    - observers[]
    - attach()
    - detach()
    - notify()
---
@title[patron observador 3]

## Patrón Observador

- *Observer*
    - update()
---
@title[event dispatcher 1]

## EventDispatcher

- Componente de Symfony2
- Eventos
    - nombre único
- Event Dispatcher
- Listeners / Subscribers
    - método callback
    - prioridad
---
@title[event dispatcher 2]

```<?php
class ImageController extends AbstractController
{
    public function createAction(Request $request)
    {
        $form = $this->getFormForCreateUser();
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
---
@title[event dispatcher 3]

```<?php
class ImageController extends AbstractController
{
    public function createAction(Request $request)
    {
        $form = $this->getFormForCreateUser();
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
---
@title[event dispatcher 4]

```<?php
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
---
## Implementación básica

- Los eventos se guardan en una base de datos
- Se consumen mediante a un comando
- El comando se programa en el cron para ejecutarse periodicamente.
---

### Persistencia

---

### Consumo

---

### Errores

---

### Ventajas

- Sencillo de implementar y de mantener
- No requiere añadir nuevos elementos de arquitectura

### Incovenientes

- La ejecución no es instantanea
- No resuelve el caso de varias ejecuciones en paralelo 

---

## Implementación avanzada

- Los eventos se guardan en una base de datos
- Se consumen mediante a un comando
- El comando se programa en el cron para ejecutarse periodicamente

---

### Persistencia

---

### Consumo

---

### Supervisor

### Ventajas

- Ejecución en paralelo
- Ejecución instantanea
- Escalabilidad horizontal

### Incovenientes

- Añade elementos de arquitectura
- Complica la depuración de errores

---