<?php

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Events\Dispatcher;

$capsule = new Capsule;

$capsule->addConnection([
    'driver' => getenv('DB_DRIVER'),
    'host' => getenv('DB_HOST'),
    'database' => getenv('DB_DATABASE'),
    'username' => getenv('DB_USERNAME'),
    'password' => getenv('DB_PASSWORD'),
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);

$capsule->setEventDispatcher(new Dispatcher());
$capsule->setAsGlobal();
$capsule->bootEloquent();