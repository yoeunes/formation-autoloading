<?php

class Route
{
    private static $routes;

    public static function handle(string $name)
    {
        if (!isset(self::$routes[$name])) {
            dd('404 Page not found');
        }

        $matches = explode('@', self::$routes[$name]);
        $controller = new $matches[0];
        $action = $matches[1];

        return $controller->{$action}();
    }

    public static function get(string $name, $controller)
    {
        self::$routes[$name] = $controller;
    }

    public static function resource(string $name, string $controller)
    {
        $actions = [
            'index' => '',
            'create' => '/create',
            'update' => '/update',
            'delete' => '/delete',
            'edit' => '/edit',
            'store' => '/store',
        ];

        foreach ($actions as $action => $url) {
            self::get($name.$url, $controller . '@'.$action);
        }
    }
}
