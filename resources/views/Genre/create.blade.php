<!DOCTYPE html>
@extends('layouts.app');
@section('content')
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title>Add Genre</title>
  </head>
  <body>

<div class="container">
    <h1> Add a new genre </h1>

<br>
<div>
<form class="" action="{{route('genre.store')}}" method="post">
@csrf
<br>
<input type="text" placeholder="Genre" name="Genre">
<br>
<input  type="submit" name="Add Genre">
</form>
</div>

<hr>


</div>


  </body>

@endsection
</html>
