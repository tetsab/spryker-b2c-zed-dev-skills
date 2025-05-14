<?php

namespace Pyz\Zed\AntelopeLocationSearch;

use Spryker\Zed\Kernel\AbstractBundleConfig;

class AntelopeLocationSearchConfig extends AbstractBundleConfig
{
    public const EVENT_ENTITY_ANTELOPE_LOCATION_PUBLISH = 'Entity.antelope_location.publish';
    public const RESOURCE_ANTELOPE_LOCATION = 'antelope_location';

    public const QUEUE_NAME = 'sync.search.antelope_location';
    public const SYNC_POOL_NAME = 'sync.pool.default';
}
