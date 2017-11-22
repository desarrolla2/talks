<?php

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