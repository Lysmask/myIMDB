<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
  public $timestamps = false;

    public function movie() {
      return hasMany('App\Movie');
    }
}
