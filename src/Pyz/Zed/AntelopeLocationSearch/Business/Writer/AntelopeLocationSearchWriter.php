<?php

namespace Pyz\Zed\AntelopeLocationSearch\Business\Writer;

use Generated\Shared\Transfer\EventEntityTransfer;
use Orm\Zed\AntelopeLocation\Persistence\PyzAntelopeLocationQuery;
use Orm\Zed\AntelopeLocationSearch\Persistence\PyzAntelopeLocationSearch;
use Orm\Zed\AntelopeLocationSearch\Persistence\PyzAntelopeLocationSearchQuery;

class AntelopeLocationSearchWriter
{
    public function publish(array $eventEntityTransfers): void
    {
        foreach ($eventEntityTransfers as $eventTransfer) {
            $id = $eventTransfer->getId();
            $antelopeLocationEntity = PyzAntelopeLocationQuery::create()->findOneByIdAntelopeLocation($id);

            if ($antelopeLocationEntity) {
                $searchEntity = PyzAntelopeLocationSearchQuery::create()
                    ->filterByFkAntelopeLocation($id)
                    ->findOneOrCreate();

                $searchEntity
                    ->setFkAntelopeLocation($id)
                    ->setData(json_encode($antelopeLocationEntity->toArray()))
                    ->save();
            }
        }
    }
}
