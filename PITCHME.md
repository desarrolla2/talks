---
@title[title]

# Async Event Dispatcher en Symfony2

---
@title[bio]

## Daniel González

### @desarrolla2

10 años programando principalmente con php y symfony

Actualmente trabajando en https://devtia.com

---
@title[objetivo]

## Objetivo

- Aproximación teorico-practica a una implementación de un gestor de eventos asyncronos en symfony2
- Ejemplos:
    - Básico ( MYSQL + CRON )
    - Avanzado ( RabbitMQ + Supervisor )
---
@title[event dispatcher]

## EventDispatcher

- Componente de Symfony2
- Implementación del patrón observer
- Eventos
    - nombre único
- Event Dispatcher
- Listeners / Subscribers
    - método callback
    - prioridad
    
---?code=examples/1_ImageController.php&lang=php&title=ImageController1

@[5]
@[7-9]
@[14]
@[15]
@[17]
@[21]

---?code=examples/2_ImageController.php&lang=php&title=ImageController2

@[11]
@[15]
@[19]

---?code=examples/ImageSubscriber.php&lang=php&title=ImageSubscriber

@[3]
@[5]
@[7-9]
@[12-20]

---

## Implementación básica

- Los eventos se guardan en una base de datos
- Se consumen mediante a un comando
- El comando se programa en el cron para ejecutarse periodicamente.

---?code=examples/GenericEvent.php&lang=php&title=GenericEvent

@[12]
@[43-47]

---?code=examples/AsyncEvent.php&lang=php&title=Event

@[7]
@[8]
@[9-10]
@[11]

---?code=examples/1_AsyncEventDispatcher.php&lang=php&title=AsyncEventDispatcher

@[14]
@[37]
@[39-45]
@[46]
@[47-48]

---?code=examples/3_ImageController.php&lang=php&title=ImageController3

@[12-13]

---?code=examples/EventConsumerCommand.php&lang=php&title=EventConsumerCommand

@[14]
@[30-35]
@[36-42]
@[43-44]
@[71-79]
@[80]
@[85-95]

### Ventajas

- Sencillo de implementar y de mantener
- No requiere añadir nuevos elementos de arquitectura

### Incovenientes

- La ejecución no es instantanea 

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