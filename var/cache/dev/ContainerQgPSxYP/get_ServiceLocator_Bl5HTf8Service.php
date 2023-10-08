<?php

namespace ContainerQgPSxYP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Bl5HTf8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.bl5HTf8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.bl5HTf8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'paginator' => ['services', 'knp_paginator', 'getKnpPaginatorService', true],
            'repo' => ['privates', 'App\\Repository\\ArtisteRepository', 'getArtisteRepositoryService', true],
        ], [
            'paginator' => '?',
            'repo' => 'App\\Repository\\ArtisteRepository',
        ]);
    }
}
