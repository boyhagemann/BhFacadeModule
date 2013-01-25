<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2012 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'facades' => array(
        'Service' =>        'BhFacadeModule\Zf2ServiceLocator',     
        'Di' =>             'BhFacadeModule\Zf2Di',     
        'App' =>            'BhFacadeModule\Zf2Application',     
        'Router' =>         'BhFacadeModule\Zf2Router',     
        'RouteMatch' =>     'BhFacadeModule\Zf2RouteMatch',     
        'Request' =>        'BhFacadeModule\Zf2Request',
        'View' =>           'BhFacadeModule\Zf2ViewRenderer',
    ),
    'invokables' => array(
        'BhFacadeModule\Zf2ServiceLocator' => 'BhFacadeModule\Zf2ServiceLocator',
    ),
    'aliases' => array(
        'facade-service-locator'    => 'BhFacadeModule\Zf2ServiceLocator',
        'facade-di'                 => 'di',
        'facade-application'        => 'application',
        'facade-router'             => 'router',
        'facade-viewrenderer'       => 'viewrenderer',
    )
);
