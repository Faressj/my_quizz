<?php

namespace ContainerUoe9cWR;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getCategorieControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'App\Controller\CategorieController' shared autowired service.
     *
     * @return \App\Controller\CategorieController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/symfony/framework-bundle/Controller/AbstractController.php';
        include_once \dirname(__DIR__, 4).'/src/Controller/CategorieController.php';

        $container->services['App\\Controller\\CategorieController'] = $instance = new \App\Controller\CategorieController();

        $instance->setContainer(($container->privates['.service_locator.mx0UMmY'] ?? $container->load('get_ServiceLocator_Mx0UMmYService'))->withContext('App\\Controller\\CategorieController', $container));

        return $instance;
    }
}
