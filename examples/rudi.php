<?php

namespace RudiExample;

include __DIR__.'/vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use Rudi\Model\Soldier as Soldier;

var_dump(Soldier::all());

var_dump(Capsule::connection()->getQueryLog());
