<!DOCTYPE html>
@extends('layouts.app');
@section('content')

<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title>Edit Movie</title>
  </head>
  <body>

<div class="container">
    <h1> Edit {{$movie->title}} </h1>

<br>
<div>
<form class="" action="{{route('movie.update', ['movie' => $movie->id])}}" method="post">
    @csrf
      <input type="text" value="{{$movie->title}}" name="title">
        <br><br>
      <input type="text" value="{{$movie->description}}" name="description">
        <br><br>
      <input type="text" value="{{$movie->poster_url}}" name="poster_url">
        <br><br>
      <input type="number" value="{{$movie->runtime}}" name="runtime">
        <br><br>
        <input type="number" value="{{$movie->releaseyear}}" name="releaseyear">
        <br><br>
        Select Genres
        <br>
        <select name="genres[]" multiple>
          @foreach ($genres as $genre)
            <option value="{{$genre->id}}"> {{$genre->type}} </option>
          @endforeach
          </select>
          <br>
        Select Director
        <br>
        <select name="directors">
          @foreach ($people as $person)
            <option value="{{$person->id}}"> {{$person->name}} </option>
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
  <input type="submit" name="moviecreator" value="Submit Changes">
</form>
</div>

<hr>


</div>


  </body>

@endsection
</html>
