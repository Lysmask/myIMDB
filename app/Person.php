<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
  public $timestamps = false;

    public function movies() {
      return $this->belongsToMany('App\Movie')->withPivot('role');
    }
}
