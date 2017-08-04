<?php

namespace EkoluStudio\Crudit;

use Illuminate\Support\ServiceProvider;

class CruditServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        // Config file
        $this->publishes([
            __DIR__.'/config/main.php' => config_path('/crudit/main.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('EkoluStudio\Crudit\CruditController');
    }
}
