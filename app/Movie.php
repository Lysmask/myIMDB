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

  function genres() {
    return $this->belongsToMany('App\Genre')->withPivot('type');
  }

  function User() {
    return $this->belongsTo('App\User')->withPivot('ratings');
  }

} // End of class
