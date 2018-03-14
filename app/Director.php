<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Director extends Model
{
    function movie() {
      return hasMany('App\Movie')
    };



} // End of class
