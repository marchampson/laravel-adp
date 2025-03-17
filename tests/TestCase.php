<?php

namespace MarcHampson\LaravelAdp\Tests;

use Illuminate\Foundation\Testing\RefreshDatabase;
use MarcHampson\LaravelAdp\LaravelAdpServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

class TestCase extends Orchestra
{
    use RefreshDatabase;

    protected function getPackageProviders($app)
    {
        return [
            LaravelAdpServiceProvider::class,
        ];
    }

    protected function defineDatabaseMigrations()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
    }

    protected function defineDatabaseFactories()
    {
        $this->loadFactoriesFrom(__DIR__.'/../database/factories');
    }

    protected function getEnvironmentSetUp($app)
    {
        $app['config']->set('database.default', 'sqlite');
        $app['config']->set('database.connections.sqlite', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);
    }

    protected function getPackageAliases($app)
    {
        return [
            'LaravelAdp' => \MarcHampson\LaravelAdp\Facades\LaravelAdp::class,
        ];
    }

    protected function getPackageBootstrappers($app)
    {
        return [
            \Orchestra\Testbench\Bootstrap\LoadEnvironmentVariables::class,
            \Orchestra\Testbench\Bootstrap\LoadConfiguration::class,
            \Orchestra\Testbench\Bootstrap\HandleExceptions::class,
            \Orchestra\Testbench\Bootstrap\LoadMigrationsFrom::class,
            \Orchestra\Testbench\Bootstrap\LoadFactoriesFrom::class,
        ];
    }

    protected function getPackageFactories($app)
    {
        return [
            fn (string $modelName) => 'MarcHampson\\LaravelAdp\\Database\\Factories\\'.class_basename($modelName).'Factory'
        ];
    }
}
