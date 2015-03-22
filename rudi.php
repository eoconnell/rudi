<?php

require 'vendor/autoload.php';
require 'config/database.php';

use Illuminate\Database\Capsule\Manager as Capsule;
use Rudi\Model\Soldier as Soldier;

var_dump(Soldier::all());

var_dump(Capsule::connection()->getQueryLog());
