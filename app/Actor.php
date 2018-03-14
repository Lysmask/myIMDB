<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    function Movie() {
      return hasMany('App\Movie')
    };


} // End of class
