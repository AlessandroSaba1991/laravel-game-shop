@extends('layouts.app')
@section('content')
<div class="container">
    <img class="img-fluid" src="{{$game->thumb}}" alt="">
    <h1>{{$game->title}}</h1>
    <div class="content">
        <p>{{$game->description}}</p>
    </div>
</div>
@endsection
