<?php

define('APPLICATION_PATH', __DIR__ . '/..');
define('CONF_PATH', APPLICATION_PATH . '/conf');
define('APP_ENV', 'product');

$application = new Yaf\Application( APPLICATION_PATH . "/conf/application.ini");

$application->bootstrap()->run();
