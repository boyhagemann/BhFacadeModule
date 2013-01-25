<?php

namespace BhFacadeModule;

class Zf2Di extends Facade
{
	/**
	 * Get the registered name of the component.
	 *
	 * @return string
	 */
	protected static function getFacadeAccessor()
	{
		return 'facade-di';
	}
}