<?php
/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */


namespace Pyz\Zed\Antelope\Business\Antelope\Reader;

interface AntelopeReaderInterface
{
    /**
     * @param \Generated\Shared\Transfer\AntelopeCriteriaTransfer $antelopeCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\AntelopeCollectionTransfer
     */
    public function getAntelopeCollection(\Generated\Shared\Transfer\AntelopeCriteriaTransfer $antelopeCriteriaTransfer) : \Generated\Shared\Transfer\AntelopeCollectionTransfer;
}
