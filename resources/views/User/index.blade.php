@extends('layouts.app')
@section('content')

<ul>
@foreach ($users as $user)
<li>
    {{ $user->id }} - {{ $user->name }} - {{ $user->email }}
</li>
@endforeach
</ul>
