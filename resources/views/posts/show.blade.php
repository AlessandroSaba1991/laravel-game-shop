@extends('layouts.app')
@section('content')
<div class="container">
    <img class="img-fluid" src="{{$post->cover_image}}" alt="">
    <h1>{{$post->title}}</h1>
    <div class="content">
        <p>{{$post->body}}</p>
    </div>
</div>
@endsection
