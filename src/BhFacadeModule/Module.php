<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace BhFacadeModule;

use Zend\Mvc\MvcEvent;
use Zend\ServiceManager\ServiceManager;
use Zend\ModuleManager\Feature\ServiceProviderInterface;

class Module
{
    public function onBootstrap(MvcEvent $e)
    {
        $serviceManager = $e->getApplication()->getServiceManager();
            
        $config = $e->getApplication()->getConfig();
        if(!isset($config['service-manager']['facades'])) {
            return;
        }
        
        $facade = $serviceManager->get('facade-service-locator');
        $facade->setContainer($serviceManager);
        
        foreach($config['service_manager']['facades'] as $alias => $class) {
            class_alias($class, $alias);          
            if(!$serviceManager->has($class)) {
                $serviceManager->setInvokableClass($class, $class);
            }
        } 
        
    }
    
    public function getServiceConfig()
    {
        return include __DIR__ . '/../../config/service.config.php';
    }

    public function getAutoloaderConfig()
    {
        return array(
            'Zend\Loader\StandardAutoloader' => array(
                'namespaces' => array(
                    __NAMESPACE__ => __DIR__ . '/../../src/' . __NAMESPACE__,
                ),
            ),
        );
    }
}
