<?php

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