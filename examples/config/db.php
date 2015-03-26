<?php

namespace RudiExample\Config;

use Illuminate\Database\Capsule\Manager as Capsule;

include __DIR__.'/../vendor/autoload.php';

$capsule = new Capsule;

$capsule->addConnection([
    'driver' => 'sqlite',
    'database' => __DIR__.'/../database.sqlite',
    'prefix' => 'rudi_'
]);

$capsule->setAsGlobal();

$capsule->bootEloquent();

