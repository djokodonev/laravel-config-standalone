<?php

use Dennykuo\Config\Config;

if (! function_exists('config')) {
    function config($configName = null)
    {
        $instance = Config::instance();

        if ($configName === null) {
            return  $instance->all();
        }

        return $instance->get($configName);
    }
}