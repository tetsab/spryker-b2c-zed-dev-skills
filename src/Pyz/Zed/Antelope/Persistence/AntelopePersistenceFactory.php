<?php
/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Pyz\Zed\Antelope\Persistence;

use Orm\Zed\Antelope\Persistence\Base\PyzAntelopeQuery;
use Pyz\Zed\Antelope\Persistence\Propel\Mapper\AnteloperMapper;

/**
 * @method \Pyz\Zed\Antelope\AntelopeConfig getConfig()
  * @method \Pyz\Zed\Antelope\Persistence\AntelopeRepositoryInterface getRepository()
  * @method \Pyz\Zed\Antelope\Persistence\AntelopeEntityManagerInterface getEntityManager()
 */
class AntelopePersistenceFactory extends \Spryker\Zed\Kernel\Persistence\AbstractPersistenceFactory
{
    public function createAntelopeQuery(): PyzAntelopeQuery
    {
        return PyzAntelopeQuery::create();
    }

    public function createAntelopeMapper()
    {
        return new AnteloperMapper();
    }
}