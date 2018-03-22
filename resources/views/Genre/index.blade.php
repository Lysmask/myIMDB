@extends ('layouts.app')
@section('content')

<div class="container">

<h1>Genres</h1>


<ul>
@foreach ($genres as $genre)
	<li>{{ $genre->type }}</li>
@endforeach
</ul>

</div>

@endsection
