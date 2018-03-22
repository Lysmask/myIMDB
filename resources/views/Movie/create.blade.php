<!DOCTYPE html>
@extends('layouts.app');
@section('content')
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title>Add Movie</title>
  </head>
  <body>

<div class="container">
    <h1> Add a new movie </h1>

<br>
<div>
<form class="" action="{{route('movie.store')}}" method="post">
    @csrf
      <input type="text" placeholder="Title" name="title">
        <br><br>
      <input type="text" placeholder="Description" name="description">
        <br><br>
      <input type="text" placeholder="Link to movie poster" name="poster_url">
        <br><br>
      <input type="number" placeholder="Runtime (minutes)" name="runtime">
        <br><br>
        <input type="number" placeholder="Releaseyear (yyyy)" name="releaseyear">
        <br><br>
        Select Director
        <br>
        <select name="director">
          @foreach ($people as $person)
            <option value="{{ $person->id}}"> {{$person->name}} </option>
          @endforeach
          </select>
          <br>
          Select Actors
          <br>
        <select name="actors[]" multiple>
          @foreach ($people as $person)
            <option value="{{$person->id}}"> {{$person->name}} </option>
          @endforeach
          </select>
          <br><br>
  <input type="submit" name="moviecreator" value="Add movie">
</form>
</div>

<hr>


</div>


  </body>

@endsection
</html>
