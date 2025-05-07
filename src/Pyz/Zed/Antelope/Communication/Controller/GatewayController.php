<?php

namespace Pyz\Zed\Antelope\Communication\Controller;

use Generated\Shared\Transfer\AntelopeLocationCriteriaTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;

class GatewayController extends AbstractGatewayController
{
    /**
     * @param \Generated\Shared\Transfer\AntelopeLocationCriteriaTransfer $criteriaTransfer
     * @return \Generated\Shared\Transfer\AntelopeLocationResponseTransfer
     */
    public function getAntelopeLocationAction(AntelopeLocationCriteriaTransfer $criteriaTransfer)
    {
        return $this->getFacade()->getAntelopeLocation($criteriaTransfer);
    }
}
