<?php

namespace MarcHampson\LaravelAdp\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \MarcHampson\LaravelAdp\LaravelAdp
 */
class LaravelAdp extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \MarcHampson\LaravelAdp\LaravelAdp::class;
    }
}
