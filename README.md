BhFacadeModule
=======================

Introduction
------------
This a startup making the facade pattern possible for ZF2 projects. It is based
and inspired on the excellent Laravel framework.


Installation with Composer
------------

Add the following lines to your composer.json file.

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


Examples
------------


     ```php
     <?php

     // Get the application from the default Zend service locator
     Service::get('application');

     ?>
     ```


Notes
------------

