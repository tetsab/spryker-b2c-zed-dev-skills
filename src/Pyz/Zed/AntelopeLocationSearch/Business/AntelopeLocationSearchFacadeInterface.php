<?php

namespace Pyz\Zed\AntelopeLocationSearch\Business;

use Generated\Shared\Transfer\EventEntityTransfer;

interface AntelopeLocationSearchFacadeInterface
{
    /**
     * @param \Generated\Shared\Transfer\EventEntityTransfer[] $eventEntityTransfers
     * @return void
     */
    public function publish(array $eventEntityTransfers): void;
}
