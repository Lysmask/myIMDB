@extends('layouts.app')
@section('content')

{{$movie->title}}


@auth

<form class="" action="RatingController@store" method="post">
  <input type="number" name="rateMe">
  <input type="submit" name="add rating" value="Add Rating!">
</form>

@endauth
@endsection
