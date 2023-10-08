<?php

namespace ContainerQJjLrBE;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ZIgE5AnService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.zIgE5An' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.zIgE5An'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'repo' => ['privates', 'App\\Repository\\AlbumRepository', 'getAlbumRepositoryService', true],
        ], [
            'paginator' => '?',
            'repo' => 'App\\Repository\\AlbumRepository',
        ]);
    }
}
