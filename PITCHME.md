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
    
---?code=examples/ImageController_1.php&lang=php&title=ImageController 1

@[5]
@[7-9]
@[14]
@[15]
@[17]
@[21]

---?code=examples/ImageController_2.php&lang=php&title=ImageController 2

@[11]
@[15]
@[19]

---?code=examples/GenericEvent.php&lang=php&title=GenericEvent

@[12]
@[43-47]

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

---?code=examples/AsyncGenericEvent.php&lang=php&title=AsyncGenericEvent

@[7]
@[11-12]
@[13]
@[15-23]

---?code=examples/AsyncEventDispatcher_1.php&lang=php&title=AsyncEventDispatcher 1

@[14]
@[37]
@[39-45]
@[46]
@[47-48]

---?code=examples/ImageController_3.php&lang=php&title=ImageController 3

@[11-12]

---?code=examples/EventConsumerCommand.php&lang=php&title=EventConsumerCommand

@[14]
@[30-35]
@[36-42]
@[43-46]
@[53]
@[69]
@[71-77]
@[79]
@[84]

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

---?code=examples/AsyncEventDispatcher_2.php&lang=php&title=AsyncEventDispatcher 2

@[35]
@[54-66]
@[64]

---?code=examples/AsyncEventConsumer_1.php&lang=php&title=AsyncEventConsumer 1

@[15]
@[37]
@[39]
@[40-48]

---?code=examples/AsyncEventConsumer_2.php&lang=php&title=AsyncEventConsumer 2

@[40]
@[42-49]
@[52-58]

---?code=examples/supervisor.conf&title=supervisor.conf

@[32]
@[33]
@[36]
@[39-40]
@[42-43]

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