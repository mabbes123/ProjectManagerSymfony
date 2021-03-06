<?php

namespace ContainerN2d2JEx;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_TWKxsPpService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.TWKxsPp' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.TWKxsPp'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'project' => ['privates', '.errored..service_locator.TWKxsPp.App\\Entity\\Project', NULL, 'Cannot autowire service ".service_locator.TWKxsPp": it references class "App\\Entity\\Project" but no such service exists.'],
            'taskRepository' => ['privates', 'App\\Repository\\TaskRepository', 'getTaskRepositoryService', true],
        ], [
            'project' => 'App\\Entity\\Project',
            'taskRepository' => 'App\\Repository\\TaskRepository',
        ]);
    }
}
