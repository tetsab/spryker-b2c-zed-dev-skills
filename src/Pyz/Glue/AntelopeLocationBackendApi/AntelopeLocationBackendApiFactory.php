<?php

namespace Pyz\Glue\AntelopeLocationBackendApi;

use Spryker\Glue\Kernel\AbstractFactory;
use Spryker\Zed\AntelopeLocation\Business\AntelopeLocationFacadeInterface;

class AntelopeLocationBackendApiFactory extends AbstractFactory
{
    public function getAntelopeLocationFacade(): AntelopeLocationFacadeInterface
    {
        return $this->getProvidedDependency(AntelopeLocationBackendApiDependencyProvider::FACADE_ANTELOPE_LOCATION);
    }
}
