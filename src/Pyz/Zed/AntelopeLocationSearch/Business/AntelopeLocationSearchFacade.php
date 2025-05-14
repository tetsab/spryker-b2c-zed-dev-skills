<?php

namespace Pyz\Zed\AntelopeLocationSearch\Business;

use Spryker\Zed\Kernel\Business\AbstractFacade;

/**
 * @method \Pyz\Zed\AntelopeLocationSearch\Business\AntelopeLocationSearchBusinessFactory getFactory()
 */
class AntelopeLocationSearchFacade extends AbstractFacade implements AntelopeLocationSearchFacadeInterface
{
    public function publish(array $eventEntityTransfers): void
    {
        $this->getFactory()
            ->createAntelopeLocationSearchWriter()
            ->publish($eventEntityTransfers);
    }
}
