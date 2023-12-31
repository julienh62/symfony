<?php

namespace ContainerXIEBQMm;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCalendarMainKidControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CalendarMainKidController' shared autowired service.
     *
     * @return \App\Controller\CalendarMainKidController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'vendor'.\DIRECTORY_SEPARATOR.'symfony'.\DIRECTORY_SEPARATOR.'framework-bundle'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'AbstractController.php';
        include_once \dirname(__DIR__, 4).''.\DIRECTORY_SEPARATOR.'src'.\DIRECTORY_SEPARATOR.'Controller'.\DIRECTORY_SEPARATOR.'CalendarMainKidController.php';

        $container->services['App\\Controller\\CalendarMainKidController'] = $instance = new \App\Controller\CalendarMainKidController();

        $instance->setContainer(($container->privates['.service_locator.GNc8e5B'] ?? $container->load('get_ServiceLocator_GNc8e5BService'))->withContext('App\\Controller\\CalendarMainKidController', $container));

        return $instance;
    }
}
