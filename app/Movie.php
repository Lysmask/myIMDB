<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
  public $timestamps = false;

  function actors() {
    return $this->belongsToMany('App\Person')->withPivot('role', 2);
  }

  function directors() {
    return $this->belongsToMany('App\Person')->withPivot('role', 1);
  }


} // End of class
