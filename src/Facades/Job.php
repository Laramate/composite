<?php

namespace Laramate\Composite\Facades;

use Laramate\Composite\Support\FacadeMapper\Facades\Facade;

/**
 * Class Job
 *
 * @method static run(string $class, array $params = [])
 */
class Job extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return \Laramate\Composite\Job::class;
    }
}
