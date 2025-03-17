<?php

namespace MarcHampson\LaravelAdp;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

class LaravelAdp
{
    public function handle(Request $request, Closure $next)
    {
        if ($request->is('agent-discovery.json')) {
            $routes = collect(Route::getRoutes())->map(function ($route) {
                return [
                    'uri' => $route->uri(),
                    'methods' => $route->methods(),
                    'name' => $route->getName(),
                ];
            });

            return Response::json($routes);
        }

        return $next($request);
    }
}
