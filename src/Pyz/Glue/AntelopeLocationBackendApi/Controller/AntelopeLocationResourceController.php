<?php

namespace Pyz\Glue\AntelopeLocationBackendApi\Controller;

use Generated\Shared\Transfer\AntelopeLocationBackendApiAttributesTransfer;
use Spryker\Glue\GlueBackendApiApplication\Controller\AbstractBackendApiController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class AntelopeLocationResourceController extends AbstractBackendApiController
{
    public function getCollectionAction(Request $request): JsonResponse
    {
        $locations = $this->getFactory()
            ->getAntelopeLocationFacade()
            ->getAllAntelopeLocations();

        return new JsonResponse($locations->toArray(), Response::HTTP_OK);
    }

    public function getAction(Request $request): JsonResponse
    {
        $id = $request->get('id');
        $location = $this->getFactory()
            ->getAntelopeLocationFacade()
            ->findAntelopeLocationById((int)$id);

        if (!$location) {
            return new JsonResponse(['error' => 'Not found'], Response::HTTP_NOT_FOUND);
        }

        return new JsonResponse($location->toArray(), Response::HTTP_OK);
    }

    public function postAction(Request $request): JsonResponse
    {
        $data = json_decode($request->getContent(), true);
        $attributes = (new AntelopeLocationBackendApiAttributesTransfer())->fromArray($data, true);

        $location = $this->getFactory()
            ->getAntelopeLocationFacade()
            ->createAntelopeLocation($attributes);

        return new JsonResponse($location->toArray(), Response::HTTP_CREATED);
    }

    public function putAction(Request $request): JsonResponse
    {
        $id = $request->get('id');
        $data = json_decode($request->getContent(), true);
        $attributes = (new AntelopeLocationBackendApiAttributesTransfer())->fromArray($data, true);
        $attributes->setIdAntelopeLocation((int)$id);

        $location = $this->getFactory()
            ->getAntelopeLocationFacade()
            ->updateAntelopeLocation($attributes);

        return new JsonResponse($location->toArray(), Response::HTTP_OK);
    }

    public function deleteAction(Request $request): JsonResponse
    {
        $id = $request->get('id');
        $success = $this->getFactory()
            ->getAntelopeLocationFacade()
            ->deleteAntelopeLocationById((int)$id);

        if (!$success) {
            return new JsonResponse(['error' => 'Not found'], Response::HTTP_NOT_FOUND);
        }

        return new JsonResponse(null, Response::HTTP_NO_CONTENT);
    }
}
