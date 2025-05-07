<?php

namespace Pyz\Zed\AntelopeLocationGui\Communication\Table;

use Orm\Zed\AntelopeLocation\Persistence\Map\SpyAntelopeLocationTableMap;
use Orm\Zed\AntelopeLocation\Persistence\SpyAntelopeLocationQuery;
use Spryker\Zed\Gui\Communication\Table\AbstractTable;
use Spryker\Zed\Gui\Communication\Table\TableConfiguration;

class AntelopeLocationTable extends AbstractTable
{
    protected function configure(TableConfiguration $config): TableConfiguration
    {
        $config->setHeader([
            SpyAntelopeLocationTableMap::COL_ID_ANTELOPE_LOCATION => 'ID',
            SpyAntelopeLocationTableMap::COL_NAME => 'Name',
        ]);

        return $config;
    }

    protected function prepareData(TableConfiguration $config): array
    {
        $query = SpyAntelopeLocationQuery::create();
        $data = $this->runQuery($query, $config);

        $rows = [];

        foreach ($data as $item) {
            $rows[] = [
                SpyAntelopeLocationTableMap::COL_ID_ANTELOPE_LOCATION => $item[SpyAntelopeLocationTableMap::COL_ID_ANTELOPE_LOCATION],
                SpyAntelopeLocationTableMap::COL_NAME => $item[SpyAntelopeLocationTableMap::COL_NAME],
            ];
        }

        return $rows;
    }
}
