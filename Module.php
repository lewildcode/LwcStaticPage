<?php
namespace LwcStaticPage;

use Zend\Mvc\ModuleRouteListener;
use Zend\Mvc\MvcEvent;

class Module
{

    public function getConfig ()
    {
        return array(
            'controllers' => array(
                'invokables' => array(
                    'LwcStaticPage\Controller' => 'LwcStaticPage\Controller\IndexController'
                )
            )
        );
    }

    public function getAutoloaderConfig ()
    {
        return array(
            'Zend\Loader\ClassMapAutoloader' => array(
                __DIR__ . '/autoload_classmap.php'
            )
        );
    }
}