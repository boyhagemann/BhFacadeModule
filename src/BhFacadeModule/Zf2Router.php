<?php

namespace BhFacadeModule;

class Zf2Router extends Facade
{
	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return static::$container->get('router');
	}
}