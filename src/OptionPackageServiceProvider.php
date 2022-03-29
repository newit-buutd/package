<?php

namespace OptionVendor\OptionPackage;

use Illuminate\Support\ServiceProvider;

class OptionPackageServiceProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot(): void
    {
        $customViewsFolder = resource_path('views/vendor/backpack/logmanager');
        if (file_exists($customViewsFolder)) {
            $this->loadViewsFrom($customViewsFolder, 'optionvendor');
        }
        $this->loadViewsFrom(realpath(__DIR__.'/resources/views'), 'optionvendor');
        // $this->loadTranslationsFrom(__DIR__.'/../resources/lang', 'optionvendor');
        //$this->loadViewsFrom(__DIR__.'/../resources/views', 'optionvendor');
        // $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        // $this->loadRoutesFrom(__DIR__.'/routes.php');

        // Publishing is only necessary when using the CLI.
        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/optionpackage.php', 'optionpackage');

        // Register the service the package provides.
        $this->app->singleton('optionpackage', function ($app) {
            return new OptionPackage;
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['optionpackage'];
    }

    /**
     * Console-specific booting.
     *
     * @return void
     */
    protected function bootForConsole(): void
    {
        // Publishing the configuration file.
        $this->publishes([
            __DIR__.'/../config/optionpackage.php' => config_path('optionpackage.php'),
        ], 'optionpackage.config');

        // Publishing the views.
       $this->publishes([
            __DIR__.'/../resources/views' => base_path('resources/views/vendor/optionvendor'),
        ], 'optionpackage.views');

        // Publishing assets.
        /*$this->publishes([
            __DIR__.'/../resources/assets' => public_path('vendor/optionvendor'),
        ], 'optionpackage.views');*/

        // Publishing the translation files.
        /*$this->publishes([
            __DIR__.'/../resources/lang' => resource_path('lang/vendor/optionvendor'),
        ], 'optionpackage.views');*/

        // Registering package commands.
        // $this->commands([]);
    }
}
