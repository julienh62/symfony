<?php

namespace ContainerXIEBQMm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KksGd9jService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.KksGd9j' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.KksGd9j'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'category' => ['privates', '.errored..service_locator.KksGd9j.App\\Entity\\Category', NULL, 'Cannot autowire service ".service_locator.KksGd9j": it references class "App\\Entity\\Category" but no such service exists.'],
            'categoryRepository' => ['privates', 'App\\Repository\\CategoryRepository', 'getCategoryRepositoryService', false],
        ], [
            'category' => 'App\\Entity\\Category',
            'categoryRepository' => 'App\\Repository\\CategoryRepository',
        ]);
    }
}
