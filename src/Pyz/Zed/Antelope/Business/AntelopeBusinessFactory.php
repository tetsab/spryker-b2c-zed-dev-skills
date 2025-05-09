<?php

/**
 * This file is part of the Spryker Commerce OS.
 * For full license information, please view the LICENSE file that was distributed with this source code.
 */

declare(strict_types = 1);

namespace Pyz\Zed\Antelope\Business;

use Pyz\Zed\Antelope\Business\Writer\AntelopeWriter;
use Spryker\Zed\Kernel\Business\AbstractBusinessFactory;

/**
 * @method \Pyz\Zed\Antelope\Persistence\AntelopeEntityManagerInterface getEntityManager()
 * @method \Pyz\Zed\Antelope\Persistence\AntelopeRepositoryInterface getRepository()
 */
class AntelopeBusinessFactory extends AbstractBusinessFactory
{
    public function createAntelopeWriter(): AntelopeWriter
    {
        return new AntelopeWriter(
            $this->getEntityManager(),
        );
    }
    /**
     * @return \Pyz\Zed\Antelope\Business\Antelope\Reader\AntelopeReaderInterface
     */
    public function createAntelopeReader() : \Pyz\Zed\Antelope\Business\Antelope\Reader\AntelopeReaderInterface
    {
        return new AntelopeReader($this->getRepository());
    }
}
