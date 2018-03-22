<?php

namespace App;
use App\Person;
use App\Movie;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    protected $fillable = [
      'movie_id',
      'user_id',
      'rating',
    ];



    protected table = 'ratings';
}
