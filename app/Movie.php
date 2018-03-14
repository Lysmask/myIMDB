<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    function actor() {
      return hasMany('App\Actor')
    };


} // End of class
