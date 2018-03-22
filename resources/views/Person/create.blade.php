<!DOCTYPE html>
@extends('layouts.app');
@section('content')
<html lang="en" dir="ltr">
  <head>

    <meta charset="utf-8">
    <title>Create Person</title>
  </head>
  <body>

<div class="container">
    <h1> Create a new person </h1>

<form class="" action="{{route('people.store')}}" method="post">
  @csrf
  <input type="text" placeholder="First name" name="firstname">
  <br><br>
  <input type="text" placeholder="Last name" name="lastname">
  <br><br>
  <input type="text" placeholder="Url to Image" name="Img">
  <br><br>
  <input type="submit" name="personcreater" value="Create Person">
</form>

<hr>


</div>


  </body>

@endsection
</html>
