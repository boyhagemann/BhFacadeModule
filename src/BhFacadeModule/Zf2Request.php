<?php

namespace BhFacadeModule;

class Zf2Request extends Facade
{
	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return static::$container->get('facade-application')->getRequest();
	}
}