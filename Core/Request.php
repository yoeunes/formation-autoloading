<?php

class Request
{
    public function get(string $name, $default = null)
    {
        return $_GET[$name] ?? $default;
    }
}
