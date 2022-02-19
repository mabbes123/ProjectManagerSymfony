<?php

namespace ContainerY7X3j9M;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_Pfa98P9Service extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.pfa98P9' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.pfa98P9'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\ProjectController::archive' => ['privates', '.service_locator.mbtGKvu', 'get_ServiceLocator_MbtGKvuService', true],
            'App\\Controller\\ProjectController::delete' => ['privates', '.service_locator.bU8nL9L', 'get_ServiceLocator_BU8nL9LService', true],
            'App\\Controller\\ProjectController::edit' => ['privates', '.service_locator.bU8nL9L', 'get_ServiceLocator_BU8nL9LService', true],
            'App\\Controller\\ProjectController::index' => ['privates', '.service_locator.mbtGKvu', 'get_ServiceLocator_MbtGKvuService', true],
            'App\\Controller\\ProjectController::show' => ['privates', '.service_locator.TWKxsPp', 'get_ServiceLocator_TWKxsPpService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.ztkjRWS', 'get_ServiceLocator_ZtkjRWSService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'App\\Controller\\TaskController::delete' => ['privates', '.service_locator.mRyu9nE', 'get_ServiceLocator_MRyu9nEService', true],
            'App\\Controller\\TaskController::edit' => ['privates', '.service_locator.mRyu9nE', 'get_ServiceLocator_MRyu9nEService', true],
            'App\\Controller\\TaskController::index' => ['privates', '.service_locator.EMcv3Xi', 'get_ServiceLocator_EMcv3XiService', true],
            'App\\Controller\\UserController::delete' => ['privates', '.service_locator.hEwcf7A', 'get_ServiceLocator_HEwcf7AService', true],
            'App\\Controller\\UserController::edit' => ['privates', '.service_locator.hEwcf7A', 'get_ServiceLocator_HEwcf7AService', true],
            'App\\Controller\\UserController::index' => ['privates', '.service_locator.FXD6KYr', 'get_ServiceLocator_FXD6KYrService', true],
            'App\\Controller\\UserController::show' => ['privates', '.service_locator.hEwcf7A', 'get_ServiceLocator_HEwcf7AService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'App\\Kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel::terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
            'App\\Controller\\ProjectController:archive' => ['privates', '.service_locator.mbtGKvu', 'get_ServiceLocator_MbtGKvuService', true],
            'App\\Controller\\ProjectController:delete' => ['privates', '.service_locator.bU8nL9L', 'get_ServiceLocator_BU8nL9LService', true],
            'App\\Controller\\ProjectController:edit' => ['privates', '.service_locator.bU8nL9L', 'get_ServiceLocator_BU8nL9LService', true],
            'App\\Controller\\ProjectController:index' => ['privates', '.service_locator.mbtGKvu', 'get_ServiceLocator_MbtGKvuService', true],
            'App\\Controller\\ProjectController:show' => ['privates', '.service_locator.TWKxsPp', 'get_ServiceLocator_TWKxsPpService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.ztkjRWS', 'get_ServiceLocator_ZtkjRWSService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.xA8Fw_.', 'get_ServiceLocator_XA8Fw_Service', true],
            'App\\Controller\\TaskController:delete' => ['privates', '.service_locator.mRyu9nE', 'get_ServiceLocator_MRyu9nEService', true],
            'App\\Controller\\TaskController:edit' => ['privates', '.service_locator.mRyu9nE', 'get_ServiceLocator_MRyu9nEService', true],
            'App\\Controller\\TaskController:index' => ['privates', '.service_locator.EMcv3Xi', 'get_ServiceLocator_EMcv3XiService', true],
            'App\\Controller\\UserController:delete' => ['privates', '.service_locator.hEwcf7A', 'get_ServiceLocator_HEwcf7AService', true],
            'App\\Controller\\UserController:edit' => ['privates', '.service_locator.hEwcf7A', 'get_ServiceLocator_HEwcf7AService', true],
            'App\\Controller\\UserController:index' => ['privates', '.service_locator.FXD6KYr', 'get_ServiceLocator_FXD6KYrService', true],
            'App\\Controller\\UserController:show' => ['privates', '.service_locator.hEwcf7A', 'get_ServiceLocator_HEwcf7AService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.C9JCBPC', 'get_ServiceLocator_C9JCBPCService', true],
            'kernel:terminate' => ['privates', '.service_locator.beq5mCo', 'get_ServiceLocator_Beq5mCoService', true],
        ], [
            'App\\Controller\\ProjectController::archive' => '?',
            'App\\Controller\\ProjectController::delete' => '?',
            'App\\Controller\\ProjectController::edit' => '?',
            'App\\Controller\\ProjectController::index' => '?',
            'App\\Controller\\ProjectController::show' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Controller\\TaskController::delete' => '?',
            'App\\Controller\\TaskController::edit' => '?',
            'App\\Controller\\TaskController::index' => '?',
            'App\\Controller\\UserController::delete' => '?',
            'App\\Controller\\UserController::edit' => '?',
            'App\\Controller\\UserController::index' => '?',
            'App\\Controller\\UserController::show' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'App\\Kernel::terminate' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'kernel::terminate' => '?',
            'App\\Controller\\ProjectController:archive' => '?',
            'App\\Controller\\ProjectController:delete' => '?',
            'App\\Controller\\ProjectController:edit' => '?',
            'App\\Controller\\ProjectController:index' => '?',
            'App\\Controller\\ProjectController:show' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'App\\Controller\\TaskController:delete' => '?',
            'App\\Controller\\TaskController:edit' => '?',
            'App\\Controller\\TaskController:index' => '?',
            'App\\Controller\\UserController:delete' => '?',
            'App\\Controller\\UserController:edit' => '?',
            'App\\Controller\\UserController:index' => '?',
            'App\\Controller\\UserController:show' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
            'kernel:terminate' => '?',
        ]);
    }
}
