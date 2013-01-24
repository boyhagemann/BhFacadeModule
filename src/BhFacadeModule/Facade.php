<?php

namespace BhFacadeModule;

abstract class Facade
{     
    static protected $container;

    /**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		throw new \RuntimeException("Facade does not implement getFacadeAccessor method.");
	}
    
	/**
	 * Handle dynamic, static calls to the object.
	 *
	 * @param  string  $method
	 * @param  array   $args
	 * @return mixed
	 */
	public static function __callStatic($method, $args)
	{
		$instance = static::resolveFacadeInstance(static::getFacadeAccessor());
        return call_user_func_array(array($instance, $method), $args);
	}
    
	/**
	 * Resolve the facade root instance from the container.
	 *
	 * @param  string  $name
	 * @return mixed
	 */
	protected static function resolveFacadeInstance($name)
	{
		if (is_object($name)) return $name;
        
        return static::$container->get($name);
	}
    
	/**
	 * Set the application instance.
	 *
	 * @param  Illuminate\Foundation\Application  $app
	 * @return void
	 */
	public static function setContainer($container)
	{
		static::$container = $container;
	}
}