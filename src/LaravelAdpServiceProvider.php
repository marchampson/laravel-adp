<?php

namespace MarcHampson\LaravelAdp;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use MarcHampson\LaravelAdp\Commands\LaravelAdpCommand;

class LaravelAdpServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('laravel-adp')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_laravel_adp_table')
            ->hasCommand(LaravelAdpCommand::class);
    }
}
