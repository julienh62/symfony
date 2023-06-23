<?php

namespace ContainerCjvFfm5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_ForCOB8Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.forCOB8' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.forCOB8'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'cartService' => ['privates', 'App\\Service\\CartService', 'getCartServiceService', false],
        ], [
            'cartService' => 'App\\Service\\CartService',
        ]);
    }
}
