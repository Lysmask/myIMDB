@extends('layouts.app')
@section('content')


<div class="container">

  @auth
  <a href="{{route('movie.edit', ['movie' => $movie->id])}}"><button>Edit</button></a>
@endauth
<h1>{{$movie->title}}</h1>
<br>
<img src="{{$movie->poster_url}}">
<br>
<h3> ReleaseYear: </h3>
@if ($movie->releaseyear > 2018)
  <h4> Movie not released </h4>
@else
<h3> {{$movie->releaseyear}} </h3>
@endif

<h2>
Directors:
</h2>

<h2>
Actors:
</h2>



@auth

  <div class="rating">
    <br><br><br>
    <h3>Rate This Movie!</h3>
            {{-- <form action="{{route('rating.store')}}" method="Post"> --}}
              <input name="star" type="radio" value="1" class="radio-btn hide" />
              <label for="star5">☆</label>
              <br>
              <input name="star" type="radio" value="2" class="radio-btn hide" />
              <label for="star4">☆☆</label>
              <br>
              <input name="star" type="radio" value="3" class="radio-btn hide" />
              <label for="star3">☆☆☆</label>
              <br>
              <input name="star" type="radio" value="4" class="radio-btn hide" />
              <label for="star2">☆☆☆☆</label>
              <br>
              <input  name="star" type="radio" value="5" class="radio-btn hide" />
              <label for="star1">☆☆☆☆☆</label>
              <br>
              <input type="submit" name="rating">
              <div class="clear"></div>
          </div>

@endauth
@endsection

</div>
