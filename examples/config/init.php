<?php

namespace RudiExample\Config;

use Illuminate\Database\Capsule\Manager as Capsule;
use Rudi\Model\Soldier as Soldier;
use Rudi\Model\Rank as Rank;

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

print 'Creating ranks table'.PHP_EOL;

Capsule::schema()->create('ranks', function($table)
{
    $table->increments('id');
    $table->string('shortname');
    $table->string('longname');
    $table->string('img_filename');
    $table->integer('ordinal');
    $table->timestamps();
});

Rank::create(['shortname' => 'RCT', 'longname' => 'Recruit', 'img_filename' => 'RCT.png', 'ordinal' => 0]);
Rank::create(['shortname' => 'PVT', 'longname' => 'Private', 'img_filename' => 'PVT.png', 'ordinal' => 1]);
Rank::create(['shortname' => 'PV2', 'longname' => 'Private Second Class', 'img_filename' => 'PV2.png', 'ordinal' => 2]);
Rank::create(['shortname' => 'PFC', 'longname' => 'Private First Class', 'img_filename' => 'PFC.png', 'ordinal' => 3]);
Rank::create(['shortname' => 'SPC', 'longname' => 'Specialist', 'img_filename' => 'SPC.png', 'ordinal' => 4]);
Rank::create(['shortname' => 'CPL', 'longname' => 'Corporal', 'img_filename' => 'CPL.png', 'ordinal' => 5]);
Rank::create(['shortname' => 'SGT', 'longname' => 'Sergeant', 'img_filename' => 'SGT.png', 'ordinal' => 6]);
Rank::create(['shortname' => 'SSG', 'longname' => 'Staff Sergeant', 'img_filename' => 'SSG.png', 'ordinal' => 7]);
Rank::create(['shortname' => 'SFC', 'longname' => 'Sergeant First Class', 'img_filename' => 'SFC.png', 'ordinal' => 8]);
Rank::create(['shortname' => 'MSG', 'longname' => 'Master Sergeant', 'img_filename' => 'MSG.png', 'ordinal' => 9]);
Rank::create(['shortname' => '1SG', 'longname' => '1st Sergeant', 'img_filename' => '1SG.png', 'ordinal' => 10]);
Rank::create(['shortname' => '2LT', 'longname' => '2nd Lieutenant', 'img_filename' => '2LT.png', 'ordinal' => 11]);
Rank::create(['shortname' => '1LT', 'longname' => '1st Lieutenant', 'img_filename' => '1LT.png', 'ordinal' => 12]);
Rank::create(['shortname' => 'CPT', 'longname' => 'Captain', 'img_filename' => 'CPT.png', 'ordinal' => 13]);

