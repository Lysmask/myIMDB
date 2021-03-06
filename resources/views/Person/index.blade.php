@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row">
    @foreach ($people as $person)
    <div class="card" style="width: 18rem;">
      <img class="card-img-top" src="{{ $person->poster_url }}" alt="Card image cap">
 <div class="card-body">
   <h5 class="card-title">{{ $person->name}}</h5>
   <a href="{{ route('person.show', ['id' => $person->id]) }}" class="btn btn-primary">{{$person->name}}</a>
 </div>
</div>
@endforeach
</div>
</div>
@endsection
