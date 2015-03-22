<?php

require 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use Illuminate\Database\Eloquent\Model as Eloquent;
use Illuminate\Events\Dispatcher;
use Illuminate\Container\Container;
use Rudi\Model\Soldier as Soldier;

$capsule = new Capsule;
$capsule->addConnection([
    'driver' => 'sqlite',
    'database' => __DIR__.'/database.sqlite',
    'prefix' => ''
]);

$capsule->setEventDispatcher(new Dispatcher(new Container));
$capsule->bootEloquent();
$capsule->setAsGlobal();

/*
Capsule::schema()->create('soldiers', function($table)
{
    $table->increments('id');
    $table->string('name');
    $table->timestamps();
});
*/

$soldiers = Soldier::all();

var_dump($soldiers);

$marnedog = Soldier::create(['name' => 'Rocky Marne']);
var_dump($marnedog);

var_dump(Capsule::connection()->getQueryLog());
