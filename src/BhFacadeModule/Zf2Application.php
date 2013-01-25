<?php

namespace BhFacadeModule;

class Zf2Application extends Facade
{
	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return 'facade-application';
	}
}