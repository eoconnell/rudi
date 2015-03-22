<?php

require 'vendor/autoload.php';
require 'config/database.php';

use Rudi\Model\Soldier as Soldier;

Soldier::create(['name' => 'Rocky Marne']);

