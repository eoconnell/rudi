<?php 

namespace Rudi\Model;

use Illuminate\Database\Eloquent\Model as Eloquent;

class Rank extends Eloquent {

    protected $fillable = ['shortname', 'longname', 'img_filename', 'ordinal'];
}
