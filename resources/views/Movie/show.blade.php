@extends('layouts.app')
@section('content')


<div class="container">
<h1>{{$movie->title}}</h1>
<br>
<img src="{{$movie->poster_url}}">

<h2>
Directors:
</h2>

{{-- @foreach ($movie->directors() as $director) --}}
{{-- @if ($person->role === 1) --}}
{{-- <li> {{$director->name}} </li> --}}
{{-- @continue --}}
{{-- @endif --}}
{{-- @endforeach--}}

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
