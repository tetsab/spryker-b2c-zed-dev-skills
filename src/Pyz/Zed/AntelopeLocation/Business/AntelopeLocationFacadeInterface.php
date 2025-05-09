<?php

namespace Pyz\Zed\AntelopeLocation\Business;

use Generated\Shared\Transfer\AntelopeLocationBackendApiAttributesTransfer;
use Generated\Shared\Transfer\AntelopeLocationTransfer;
use Generated\Shared\Transfer\AntelopeLocationCollectionTransfer;

interface AntelopeLocationFacadeInterface
{
    public function getAllAntelopeLocations(): AntelopeLocationCollectionTransfer;

    public function findAntelopeLocationById(int $id): ?AntelopeLocationTransfer;

    public function createAntelopeLocation(AntelopeLocationBackendApiAttributesTransfer $attributes): AntelopeLocationTransfer;

    public function updateAntelopeLocation(AntelopeLocationBackendApiAttributesTransfer $attributes): AntelopeLocationTransfer;

    public function deleteAntelopeLocationById(int $id): bool;
}
