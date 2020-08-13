<?php

namespace ZepFietje\Route;

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route as Facade;

class Route extends Facade
{
    public static function view(string $uri, string $view, array $data = []): RoutingRoute
    {
        return self::get(
            $uri,
            fn () => view($view, $data, request()->route()->parameters())
        );
    }
}
