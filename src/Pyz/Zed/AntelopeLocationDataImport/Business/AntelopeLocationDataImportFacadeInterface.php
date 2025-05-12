<?php

namespace Pyz\Zed\AntelopeLocationDataImport\Business;

use Spryker\Zed\DataImport\Business\Model\DataImporter\DataImporterInterface;

interface AntelopeLocationDataImportFacadeInterface
{
    public function importAntelopeLocationData(): DataImporterInterface;
}
