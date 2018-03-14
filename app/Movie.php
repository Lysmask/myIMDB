<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    function person() {
      return hasMany('App\Person');
    }


} // End of class
