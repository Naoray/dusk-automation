<?php

namespace Naoray\DuskAutomation;

use Illuminate\Support\ServiceProvider;

class DuskAutomationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../config/dusk_automation.php' => config_path('dusk_automation.php'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__.'/../config/dusk_automation.php', 'dusk_automation'
        );

        $this->app->bind('dusk', DuskAutomation::class);
    }
}
