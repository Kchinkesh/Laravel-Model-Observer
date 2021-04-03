<?php

namespace Kchinkesh\LaravelModelObserver;

use Illuminate\Support\ServiceProvider;

class ModelObserverServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->app->make('Kchinkesh\LaravelModelObserver\Http\Controllers\ModelObserverController');
		$this->loadRoutesFrom(__DIR__.'/routes/routes.php');
		$this->loadViewsFrom(__DIR__.'/resources/views', 'laravel-model-observer');
		$this->loadMigrationsFrom(__DIR__.'/Database/migrations');
		$this->publishes([
            __DIR__.'/resources/views' => base_path('resources/views/kchinkesh/laravel-model-observer'),
        ]);
    }
}
