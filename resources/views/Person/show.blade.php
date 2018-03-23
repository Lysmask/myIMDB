@extends('layouts.app')
@section('content')


<div class="container">

  @auth
  <a href="{{route('person.edit', ['person' => $person->id])}}"><button>Edit</button></a>
@endauth
<h1>{{$person->name}}</h1>
<br>
<img src="{{$person->poster_url}}">

<h2>
Directed:
</h2>

<h2>
Acted in:
</h2>




@endsection

</div>
