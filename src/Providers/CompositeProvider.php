<?php

namespace Laramate\Composite\Providers;

use Illuminate\Support\ServiceProvider;
use Laramate\Composite\Path;

class CompositeProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->registerPublishing();
        }
    }

    /**
     * Register the package's publishable resources.
     */
    protected function registerPublishing()
    {
        $this->publishes(
            [Path::migrations() => database_path('migrations')],
            'laramate-composite-migrations'
        );

        $this->loadMigrationsFrom(Path::migrations());
    }
}
