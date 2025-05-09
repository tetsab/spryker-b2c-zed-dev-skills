<?php

namespace Pyz\Glue\AntelopeLocationBackendApi\Plugin\GlueBackendApiApplication;

use Pyz\Glue\AntelopeLocationBackendApi\AntelopeLocationBackendApiConfig;
use Spryker\Glue\GlueBackendApiApplicationExtension\Dependency\Plugin\ResourcePluginInterface;
use Spryker\Glue\GlueBackendApiApplication\Plugin\AbstractResourcePlugin;
use Spryker\Glue\GlueBackendApiApplication\Plugin\ResourceRouteCollectionInterface;
use Spryker\Glue\GlueBackendApiApplication\Plugin\ResourceRouteCollection;

class AntelopeLocationResourcePlugin extends AbstractResourcePlugin implements ResourcePluginInterface
{
    public function getType(): string
    {
        return AntelopeLocationBackendApiConfig::RESOURCE_ANTELOPE_LOCATION;
    }

    public function getController(): string
    {
        return 'antelope-location-resource';
    }

    public function getResourceRouteCollection(): ResourceRouteCollectionInterface
    {
        $routes = new ResourceRouteCollection();
        $routes->addGet('get', true);
        $routes->addGet('getCollection', false);
        $routes->addPost('post', false);
        $routes->addPut('put', true);
        $routes->addDelete('delete', true);

        return $routes;
    }
}
