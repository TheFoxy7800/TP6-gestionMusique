<?php

namespace ContainerQgPSxYP;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_JvtX91IService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.jvtX91I' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.jvtX91I'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'artiste' => ['services', 'App\\Entity\\Artiste', 'getArtisteService', true],
        ], [
            'artiste' => 'App\\Entity\\Artiste',
        ]);
    }
}
