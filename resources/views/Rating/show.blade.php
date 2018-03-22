@extends('layouts.app')
@section('content')
@use App\Movie

<div class="container">
{{$movie->title}}

<h1>
Directors:
</h1>

{{-- @foreach ($movie->directors() as $director) --}}
{{-- @if ($person->role === 1) --}}
{{-- <li> {{$director->name}} </li> --}}
{{-- @continue --}}
{{-- @endif --}}
{{-- @endforeach--}}

<h1>
Actors:
</h1>



@auth

  <div class="rating">
    <br><br><br>
    <h3>Rate This Movie!</h3>

              <input id="star5" name="star" type="radio" value="5" class="radio-btn hide" />
              <label for="star5">☆</label>
              <br>
              <input id="star4" name="star" type="radio" value="4" class="radio-btn hide" />
              <label for="star4">☆☆</label>
              <br>
              <input id="star3" name="star" type="radio" value="3" class="radio-btn hide" />
              <label for="star3">☆☆☆</label>
              <br>
              <input id="star2" name="star" type="radio" value="2" class="radio-btn hide" />
              <label for="star2">☆☆☆☆</label>
              <br>
              <input id="star1" name="star" type="radio" value="1" class="radio-btn hide" />
              <label for="star1">☆☆☆☆☆</label>
              <br>
              <input type="submit" name="submit" action="{{route('rating.store')}}">
              <div class="clear"></div>
          </div>

@endauth
@endsection

</div>
