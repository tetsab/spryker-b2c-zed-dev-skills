<?php

namespace Pyz\Glue\AntelopeLocationBackendApi;

use Spryker\Glue\Kernel\AbstractBundleDependencyProvider;
use Spryker\Glue\Kernel\Container;

class AntelopeLocationBackendApiDependencyProvider extends AbstractBundleDependencyProvider
{
    public const FACADE_ANTELOPE_LOCATION = 'FACADE_ANTELOPE_LOCATION';

    public function provideDependencies(Container $container): Container
    {
        $container = parent::provideDependencies($container);
        $container = $this->addAntelopeLocationFacade($container);

        return $container;
    }

    protected function addAntelopeLocationFacade(Container $container): Container
    {
        $container->set(static::FACADE_ANTELOPE_LOCATION, function (Container $container) {
            return $container->getLocator()->antelopeLocation()->facade();
        });

        return $container;
    }
}
