<?php

namespace Pyz\Zed\AntelopeLocationDataImport;

use Spryker\Zed\DataImport\DataImportConfig;

class AntelopeLocationDataImportConfig extends DataImportConfig
{
    public const IMPORT_TYPE_ANTELOPE_LOCATION = 'antelope-location';

    public const COLUMN_NAME = 'name';
    public const COLUMN_LATITUDE = 'latitude';
    public const COLUMN_LONGITUDE = 'longitude';
}
