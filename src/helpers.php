<?php

/**
 * @return array
 */
if (! function_exists('config')) {
    function config($configName = null)
    {
        $instance = Dennykuo\Config\Config::instance();

        if ($configName === null) {
            return  $instance->all();
        }

        return $instance->get($configName);
    }
}