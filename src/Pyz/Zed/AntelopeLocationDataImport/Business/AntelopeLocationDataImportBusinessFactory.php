<?php

namespace Pyz\Zed\AntelopeLocationDataImport\Business;

use Pyz\Zed\AntelopeLocationDataImport\AntelopeLocationDataImportConfig;
use Pyz\Zed\AntelopeLocationDataImport\Business\DataImportStep\AntelopeLocationWriterStep;
use Spryker\Zed\DataImport\Business\Model\DataImporter\DataImporterInterface;
use Spryker\Zed\DataImport\Business\Model\DataImporter\DataImporter;
use Spryker\Zed\DataImport\Business\Model\DataSet\StepBroker;
use Spryker\Zed\DataImport\Business\Model\DataSet\StepBrokerInterface;
use Spryker\Zed\DataImport\Business\Model\Csv\CsvDataSetStepBroker;

class AntelopeLocationDataImportBusinessFactory
{
    public function createAntelopeLocationDataImporter(): DataImporterInterface
    {
        $dataImporter = new DataImporter(AntelopeLocationDataImportConfig::IMPORT_TYPE_ANTELOPE_LOCATION, $this->getCsvReader());

        $dataSetStepBroker = $this->createStepBroker();
        $dataSetStepBroker->addStep(new AntelopeLocationWriterStep());

        $dataImporter->addDataSetStepBroker($dataSetStepBroker);

        return $dataImporter;
    }

    protected function getCsvReader(): \Spryker\Zed\DataImport\Business\Model\DataReader\DataReaderInterface
    {
        return new \Spryker\Zed\DataImport\Business\Model\Csv\CsvReader();
    }

    protected function createStepBroker(): StepBrokerInterface
    {
        return new CsvDataSetStepBroker();
    }
}
