<?php

namespace ContainerCjvFfm5;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getStripeServiceService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private 'App\Stripe\StripeService' shared autowired service.
     *
     * @return \App\Stripe\StripeService
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Stripe'.\DIRECTORY_SEPARATOR.'StripeService.php';

        return $container->privates['App\\Stripe\\StripeService'] = new \App\Stripe\StripeService($container->getEnv('STRIPE_SECRET_KEY'), $container->getEnv('STRIPE_PUBLIC_KEY'));
    }
}
