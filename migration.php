<?php

require 'rudi.php';

$capsule->schema()->create('award', function($table) 
{
    $table->increments('id');
    $table->integer('class_id');
    $table->string('name');
    $table->string('image');
    $table->string('description');
    $table->integer('weight');
});

$capsule->schema()->create('soldiors', function($table)
{
    $table->increments('id');
    $table->integer('unit_id');
    $table->integer('rank_id');
    $table->integer('primary_weapon_id');
    $table->integer('secondary_weapon_id');
    $table->integer('status_id');
    $table->integer('country_id');
    $table->integer('role_id');
    $table->string('image');
    $table->string('first_name');
    $table->string('last_name');
    $table->string('location_city');
    $table->string('location_province');
    $table->string('primary_mos');
    $table->text('bio');
    $table->date('dob');
    $table->date('date_enlisted');
    $table->date('date_discharged');
    $table->date('date_promotion');
});
