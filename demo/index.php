<?php

require '../vendor/autoload.php';

use Dennykuo\Config\Config;

var_dump(Config::instance()->all());

var_dump(Config::instance()->get('app'));

var_dump(Config::instance()->get('app.name'));

var_dump(Config::instance(__DIR__ . '/config')->get('app'));

var_dump(config());

var_dump(config('app.name'));
