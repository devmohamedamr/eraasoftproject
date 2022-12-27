<?php

namespace Eraasoft311\Project\Core;

class Route
{
    public static $routes;

    public static function get($url,$action)
    {
        self::$routes[$url] = $action;
    }
}