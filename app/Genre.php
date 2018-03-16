<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    function movie() {
      return hasMany('App\Movie');
    }


} // End of class
