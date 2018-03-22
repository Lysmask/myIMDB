<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
  public $timestamps = false;

  function movies() {
    return $this->belongsToMany('App\Movie')->withPivot('type');
}

} // End of class
