<?php

namespace Pyz\Zed\AntelopeLocationGui\Communication\Controller;

use Symfony\Component\HttpFoundation\Request;
use Pyz\Zed\AntelopeLocationGui\Communication\Form\AntelopeLocationCreateForm;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;

class IndexController extends AbstractController
{
    public function indexAction(Request $request)
    {
        $form = $this->getFactory()->createAntelopeLocationCreateForm();
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $data = $form->getData();

            $entity = new \Orm\Zed\AntelopeLocation\Persistence\SpyAntelopeLocation();
            $entity->setName($data[AntelopeLocationCreateForm::FIELD_NAME]);
            $entity->save();

            $this->addSuccessMessage('Location added successfully.');
            return $this->redirectResponse('/antelope-location-gui');
        }

        return $this->viewResponse([
            'form' => $form->createView(),
            'table' => $this->getFactory()->createAntelopeLocationTable()->render(),
        ]);
    }
}
