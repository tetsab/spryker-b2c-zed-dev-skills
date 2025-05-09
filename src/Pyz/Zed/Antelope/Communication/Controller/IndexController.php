<?php

namespace Pyz\Zed\Antelope\Communication\Controller;

use Generated\Shared\Transfer\AntelopeCriteriaTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractController;

class IndexController extends AbstractController
{
    public function indexAction()
    {
        $antelopeCriteriaTransfer = new AntelopeCriteriaTransfer();
        $antelopes = $this->getFacade()->getAntelopeCollection($antelopeCriteriaTransfer)->getAntelopes();
        return $this->viewResponse(["antelopes" => $antelopes]);
    }
}
