<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace Pyz\Zed\Antelope\Communication\Controller;

use Generated\Shared\Transfer\AntelopeLocationTransfer;
use Spryker\Zed\Kernel\Communication\Controller\AbstractGatewayController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

/**
 * @method \Pyz\Zed\Antelope\Business\AntelopeFacadeInterface getFacade()
 * @method \Pyz\Zed\Antelope\Persistence\AntelopeRepositoryInterface getRepository()
 */
class AntelopeLocationController extends AbstractGatewayController
{
    /**
     * @param \Symfony\Component\HttpFoundation\Request $request
     *
     * @return \Symfony\Component\HttpFoundation\JsonResponse
     */
    public function addAction(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);

        $antelopeLocationTransfer = new AntelopeLocationTransfer();
        $antelopeLocationTransfer->fromArray($data, true);

        $createdLocation = $this->getFacade()->createAntelopeLocation($antelopeLocationTransfer);

        return new JsonResponse($createdLocation->toArray(), JsonResponse::HTTP_CREATED);
    }
}
