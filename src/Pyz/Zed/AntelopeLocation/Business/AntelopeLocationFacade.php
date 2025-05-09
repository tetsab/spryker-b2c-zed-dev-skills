<?php

namespace Pyz\Zed\AntelopeLocation\Business;

use Generated\Shared\Transfer\AntelopeLocationBackendApiAttributesTransfer;
use Generated\Shared\Transfer\AntelopeLocationCollectionTransfer;
use Spryker\Zed\Kernel\Business\AbstractFacade;


class AntelopeLocationFacade extends AbstractFacade implements AntelopeLocationFacadeInterface
{
    public function getAllAntelopeLocations(): AntelopeLocationCollectionTransfer
    {
        return $this->getFactory()
            ->createAntelopeLocationReader()
            ->getAllAntelopeLocations();
    }

    public function findAntelopeLocationById(int $id): ?AntelopeLocationBackendApiAttributesTransfer
    {
        return $this->getFactory()
            ->createAntelopeLocationReader()
            ->findAntelopeLocationById($id);
    }

    public function createAntelopeLocation(AntelopeLocationBackendApiAttributesTransfer $transfer): AntelopeLocationBackendApiAttributesTransfer
    {
        return $this->getFactory()
            ->createAntelopeLocationWriter()
            ->create($transfer);
    }

    public function updateAntelopeLocation(AntelopeLocationBackendApiAttributesTransfer $transfer): AntelopeLocationBackendApiAttributesTransfer
    {
        return $this->getFactory()
            ->createAntelopeLocationWriter()
            ->update($transfer);
    }

    public function deleteAntelopeLocationById(int $id): void
    {
        $this->getFactory()
            ->createAntelopeLocationWriter()
            ->delete($id);
    }
}
