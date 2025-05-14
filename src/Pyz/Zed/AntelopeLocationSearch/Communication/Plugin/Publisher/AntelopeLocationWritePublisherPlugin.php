<?php

namespace Pyz\Zed\AntelopeLocationSearch\Communication\Plugin\Publisher;

use Pyz\Zed\AntelopeLocationSearch\AntelopeLocationSearchConfig;
use Spryker\Zed\Publisher\Dependency\Plugin\PublisherPluginInterface;
use Spryker\Zed\Kernel\Communication\AbstractPlugin;
use Generated\Shared\Transfer\EventEntityTransfer;

class AntelopeLocationWritePublisherPlugin extends AbstractPlugin implements PublisherPluginInterface
{
    /**
     * @param \Generated\Shared\Transfer\EventEntityTransfer[] $eventEntityTransfers
     * @return void
     */
    public function handleBulk(array $eventEntityTransfers, $eventName): void
    {
        $this->getFacade()->publish($eventEntityTransfers);
    }

    public function getSubscribedEvents(): array
    {
        return [
            AntelopeLocationSearchConfig::EVENT_ENTITY_ANTELOPE_LOCATION_PUBLISH,
        ];
    }
}
