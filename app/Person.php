<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    public function movie() {
      return hasMany('App\Movie');
    }
}
