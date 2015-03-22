<?php

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('soldiers', function($table)
{
    $table->increments('id');
    $table->string('name');
    $table->timestamps();
});

