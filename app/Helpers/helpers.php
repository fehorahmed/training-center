<?php

use App\Models\GlobalConfig;

if (! function_exists('greet')) {
    function greet($name)
    {
        return "Hello, {$name}!";
    }
}

if (! function_exists('getGlobalConfig')) {
    function getGlobalConfig($key, $array = false)
    {
        $config = GlobalConfig::where('key', $key)->first();
        if ($array) {
            $value = [];
            if ($config !== null) {
                $value = explode(',', trim($config->value));
            }
        } else {
            $value = null;
            if ($config !== null) {
                $value = trim($config->value);
            }
        }

        return $value;
    }
}