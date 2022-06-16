@extends('layouts.app')
@section('content')
<div class="p-5 bg-light">
    <div class="container">
        <h1 class="display-3">HOMEPAGE</h1>
        <p class="lead">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates, illum.</p>
        <p class="lead">
            <a class="btn btn-primary btn-lg" href="{{route('games.index')}}" role="button">Go to Games</a>
        </p>
    </div>
</div>
@endsection
