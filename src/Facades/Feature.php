<?php

namespace Laramate\Composite\Facades;

use Laramate\FacadeMapper\Facades\Facade;

class Feature extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \Laramate\Composite\Feature::class;
    }
}
