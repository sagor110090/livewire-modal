<?php

namespace Sagor110090\LivewireModal;


use AliQasemzadeh\LaravelLivewireModals\Components\Modals;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class LivewireModalServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        /*
         * Optional methods to load your package assets
         */
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'livewire modal ');
        // $this->loadViewsFrom(__DIR__.'/../resources/views', 'livewire modal ');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        if ($this->app->runningInConsole()) {
            // $this->publishes([
            //     __DIR__.'/../config/config.php' => config_path('livewire modal .php'),
            // ], 'config');

            // Publishing the views.
            /*$this->publishes([
                __DIR__.'/../resources/views' => resource_path('views/vendor/livewire modal '),
            ], 'views');*/

            // Publishing assets.
            /*$this->publishes([
                __DIR__.'/../resources/assets' => public_path('vendor/livewire modal '),
            ], 'assets');*/

            // Publishing the translation files.
            /*$this->publishes([
                __DIR__.'/../resources/lang' => resource_path('lang/vendor/livewire modal '),
            ], 'lang');*/

            // Registering package commands.
            // $this->commands([]);

            


        }

        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'livewire-modal');

        $this->publishes(
            [__DIR__ . '/../resources/views' => resource_path('views/vendor/livewire-modal')],
            ['livewire-modal', 'livewire-modal:views']
        );

        Livewire::component('modals', Modals::class);
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'livewire-modal ');

        // Register the main class to use with the facade
        $this->app->singleton('livewire-modal ', function () {
            return new LivewireModal;
        });
    }
}
