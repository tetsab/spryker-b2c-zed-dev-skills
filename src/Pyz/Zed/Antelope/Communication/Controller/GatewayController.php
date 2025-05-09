<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace Pyz\Zed\Antelope\Communication\Controller;

use Generated\Shared\Transfer\AntelopeLocationCriteriaTransfer;
use Generated\Shared\Transfer\AntelopeLocationResponseTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;

/**
 * @method \Pyz\Zed\Antelope\Business\AntelopeFacadeInterface getFacade()
 * @method \Pyz\Zed\Antelope\Persistence\AntelopeRepositoryInterface getRepository()
 */
class GatewayController extends AbstractGatewayController
{
    /**
     * @param \Generated\Shared\Transfer\AntelopeLocationCriteriaTransfer $criteriaTransfer
     *
     * @return \Generated\Shared\Transfer\AntelopeLocationResponseTransfer
     */
    public function getAntelopeLocationAction(AntelopeLocationCriteriaTransfer $criteriaTransfer): AntelopeLocationResponseTransfer
    {
        return $this->getFacade()->getAntelopeLocation($criteriaTransfer);
    }
}
