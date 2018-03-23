<!DOCTYPE html>
@extends('layouts.app');
@section('content')
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title>Edit Person</title>
  </head>
  <body>

<div class="container">
    <h1> Edit {{$person->name}} </h1>

<form class="" action="{{route('people.update')}}" method="post">
  @csrf
  <input type="text" value="{{$person->name}}" placeholder="Name" name="name">
  <br><br>
  <input type="text" value="{{$person->poster_url}}" placeholder="Image_url" name="poster_url">
  <br><br>
  <input type="submit" name="personcreater" value="Submit Changes">
</form>

<hr>


</div>


  </body>

@endsection
</html>
