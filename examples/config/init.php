<?php

namespace RudiExample\Config;

use Illuminate\Database\Capsule\Manager as Capsule;
use Rudi\Model\Soldier as Soldier;

include __DIR__.'/../vendor/autoload.php';

@unlink(__DIR__.'/../database.sqlite');
touch(__DIR__.'/../database.sqlite');

print 'Creating soldiers table'.PHP_EOL;

Capsule::schema()->create('soldiers', function($table)
{
    $table->increments('id');
    $table->string('name');
    $table->timestamps();
});

Soldier::create(['name' => 'Rocky Marne']);

