@extends('layouts.app')
@section('content')
@use App\Movie

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

<form class="" action="RatingController@store" method="post">
  <input type="number" name="rateMe">
  <input type="submit" name="add rating" value="Add Rating!">
</form>

@endauth
@endsection
