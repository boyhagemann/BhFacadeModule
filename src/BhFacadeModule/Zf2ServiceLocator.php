<?php

namespace BhFacadeModule;

class Zf2ServiceLocator extends Facade
{
	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return static::$container;
	}
}