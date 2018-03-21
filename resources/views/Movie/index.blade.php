@extends('layouts.app')
@section('content')

    <div class="row">
    @foreach ($movies as $movie)
    <div class="card" style="width: 18rem;">
 <img class="card-img-top" src="{{$movie->poster_url}}" alt="Card image cap">
 <div class="card-body">
   <h5 class="card-title">{{ $movie->title}}</h5>
   <p class="card-text">{{ $movie->description}}</p>
   <a href="{{ route('movies.show', ['id' => $movie->id]) }}" class="btn btn-primary">Go somewhere</a>
 </div>
</div>
@endforeach
</div>
@endsection
