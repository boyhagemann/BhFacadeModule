BhFacadeModule
=======================

Introduction
------------
This a startup making the facade pattern possible for ZF2 projects. It is based
and inspired on the excellent Laravel framework. It uses the Zend service locator
internally by default.

The easiest way to check it out is to clone the [Zend Skeleton Application] (https://github.com/zendframework/ZendSkeletonApplication "Zend Skeleton Application")
and edit the composer.json file (see installation below).

Installation with Composer
------------

Add the following lines to your composer.json file:

```json
{
   "repositories": [
       {
           "type": "git",
           "url": "https://github.com/boyhagemann/BhFacadeModule.git"
       }
   ],
    "minimum-stability": "dev",
    "require": {
        "boyhagemann/BhFacadeModule": "dev-master"
    }
}
```

Then activate the module in your application:

```php
<?php

// config/application.config.php

// ...

    'modules' => array(
        'BhFacadeModule', // This is the only line you have to add
        'Application',
    ),

// ...

 ```

Congratulations! You now have a working module and can enjoy the bless of facades!

Out of the box
--------------

These facades are already registered when you activate the module:

* Service
* Di
* App
* Router
* RouteMatch
* Request
* View

Examples
------------

Here are some examples to get an impression how you can use facades. 

```php
<?php

// Get the application from the default Zend service locator
Service::get('application');

// Get the current request uri as a string
Request::getUriString();

// Add a route to the router
Router::addRoute('testroute', array(
    'type' => 'segment',
    'options' => array(
        'route' => '/test/route',
        'controller' => 'index',
        'action' => 'test',
    )
));

// Get the url for that route
Router::assemble(array(), array('name' => 'testroute')));

// Render a view template
View::render('application/index/index');

```


Creating your own facades
------------

You can add custom facades in your project. There are two steps for creating
your own fancy facade.

First create a facade class, extending the BhFacadeModule\Facade class. In this
example we place the class in our application module in the folder 
"src/Application/Facade".

```php
<?php

namespace Application\Facade;

use BhFacadeModule\Facade;

class MyCustomFacade extends Facade
{

    // This is the only required method. It returns the name of the class (or alias) 
    // that will be used.
    protected static function getFacadeAccessor()
	{
		return 'Name\Of\The\Class';
	}
}
```

Ater this, you can add the facade name in your module config. In the example, we
add a few lines to the module.config in our Application module

```php

// src/Application/config/module.config.php (or any other module you are using)

// ...

    'service-manager' => array(
        'facades' => array(
            'MyFacade' => 'Application\Facade\MyCustomFacade'
        )
    )

// ...

```

That's it! Now you have your own facade, ready to be used thru out your whole application.


Notes
------------

