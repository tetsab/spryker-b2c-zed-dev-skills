<?php

// Alterar o nome da interface para: AntelopeLocationDataImportFacade.php
namespace Pyz\Zed\AntelopeLocationDataImport\Business;

interface AntelopeLocationDataImportFacade
{
    public function importAntelopeLocationData(): \Spryker\Zed\DataImport\Business\Model\DataImporterInterface;
}
