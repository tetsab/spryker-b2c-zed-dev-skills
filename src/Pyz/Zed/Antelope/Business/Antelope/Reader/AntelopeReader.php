<?php
/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */


namespace Pyz\Zed\Antelope\Business\Antelope\Reader;

use Pyz\Zed\Antelope\Persistence\AntelopeRepositoryInterface;

class AntelopeReader implements AntelopeReaderInterface
{
    /**
     * @var \Pyz\Zed\Antelope\Persistence\AntelopeRepositoryInterface
     */
    protected AntelopeRepositoryInterface $antelopeRepository;

    /**
     * @var \Pyz\Zed\AntelopeExtension\Dependency\Plugin\Antelope\Expander\AntelopeExpanderPluginInterface[]
     */
    protected array $antelopeExpanderPlugins;

    /**
     * @param \Pyz\Zed\Antelope\Persistence\AntelopeRepositoryInterface $antelopeRepository
     * @param \Pyz\Zed\AntelopeExtension\Dependency\Plugin\Antelope\Expander\AntelopeExpanderPluginInterface[] $antelopeExpanderPlugins
     */
    public function __construct(
        AntelopeRepositoryInterface $antelopeRepository,
        array $antelopeExpanderPlugins
    ) {
        $this->antelopeRepository = $antelopeRepository;
        $this->antelopeExpanderPlugins = $antelopeExpanderPlugins;
    }

    /**
     * @param \Generated\Shared\Transfer\AntelopeCriteriaTransfer $antelopeCriteriaTransfer
     *
     * @return \Generated\Shared\Transfer\AntelopeCollectionTransfer
     */
    public function getAntelopeCollection(
        \Generated\Shared\Transfer\AntelopeCriteriaTransfer $antelopeCriteriaTransfer
    ): \Generated\Shared\Transfer\AntelopeCollectionTransfer {
        $antelopeCollectionTransfer = $this->antelopeRepository
            ->getAntelopeCollection($antelopeCriteriaTransfer);

        return $this->executeAntelopeExpanderPlugins($antelopeCollectionTransfer);
    }

    /**
     * @param \Generated\Shared\Transfer\AntelopeCollectionTransfer $antelopeCollectionTransfer
     *
     * @return \Generated\Shared\Transfer\AntelopeCollectionTransfer
     */
    protected function executeAntelopeExpanderPlugins(
        \Generated\Shared\Transfer\AntelopeCollectionTransfer $antelopeCollectionTransfer
    ): \Generated\Shared\Transfer\AntelopeCollectionTransfer {
        $antelopeTransfers = $antelopeCollectionTransfer->getAntelopes()->getArrayCopy();

        foreach ($this->antelopeExpanderPlugins as $antelopeExpanderPlugin) {
            $antelopeTransfers = $antelopeExpanderPlugin->expand($antelopeTransfers);
        }

        return $antelopeCollectionTransfer->setAntelopes(new \ArrayObject($antelopeTransfers));
    }
}
