<?php

namespace App\Core;

use Exception;

class App
{

    protected static $register;

    public static function bind($key, $value)
    {
        static::$register[$key] = $value;
    }

    public static function get($key)
    {
        if (! array_key_exists($key, static::$register)) {
            throw new Exception('El registro no existe');
        }

        return static::$register[$key];
    }


}
