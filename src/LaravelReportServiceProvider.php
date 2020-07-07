<?php

namespace Emilianotisato\LaravelReport;

use Emilianotisato\LaravelReport\Commands\LaravelReportCommand;
use Illuminate\Support\ServiceProvider;

class LaravelReportServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/laravel-reports.php' => config_path('laravel-reports.php'),
            ], 'config');

            $this->publishes([
                __DIR__.'/../resources/views' => base_path('resources/views/vendor/laravel-reports'),
            ], 'views');

            if (! class_exists('CreatePackageTable')) {
                $this->publishes([
                    __DIR__ . '/../database/migrations/create_laravel_reports_table.php.stub' => database_path('migrations/' . date('Y_m_d_His', time()) . '_create_laravel_reports_table.php'),
                ], 'migrations');
            }

            $this->commands([
                LaravelReportCommand::class,
            ]);
        }

        $this->loadViewsFrom(__DIR__.'/../resources/views', 'laravel-reports');
    }

    public function register()
    {
        $this->mergeConfigFrom(__DIR__.'/../config/laravel-reports.php', 'laravel-reports');
    }
}
