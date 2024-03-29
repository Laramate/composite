<?php

namespace Laramate\Composite\Facades;

use Laramate\Composite\Support\FacadeMapper\Facades\Facade;

class Operation extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \Laramate\Nucid\Operation\Models\Operation::class;
    }
}
