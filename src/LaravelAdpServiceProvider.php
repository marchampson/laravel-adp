<?php

namespace MarcHampson\LaravelAdp;

use MarcHampson\LaravelAdp\Commands\LaravelAdpCommand;
use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

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
