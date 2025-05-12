<?php

namespace Pyz\Zed\AntelopeLocationDataImport\Business\DataImportStep;

use Orm\Zed\AntelopeLocation\Persistence\PyzAntelopeLocation;
use Spryker\Zed\DataImport\Business\Model\DataImportStep\DataImportStepInterface;
use Spryker\Zed\DataImport\Business\Model\DataSet\DataSetInterface;
use Pyz\Zed\AntelopeLocationDataImport\AntelopeLocationDataImportConfig;

class AntelopeLocationWriterStep implements DataImportStepInterface
{
    public function execute(DataSetInterface $dataSet): void
    {
        $entity = new PyzAntelopeLocation();
        $entity->setName($dataSet[AntelopeLocationDataImportConfig::COLUMN_NAME]);
        $entity->setLatitude($dataSet[AntelopeLocationDataImportConfig::COLUMN_LATITUDE]);
        $entity->setLongitude($dataSet[AntelopeLocationDataImportConfig::COLUMN_LONGITUDE]);
        $entity->save();
    }
}
