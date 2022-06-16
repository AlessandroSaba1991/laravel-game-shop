@extends('layouts.app')
@section('content')
<div class="heading text-center py-5">
    <h1>Games</h1>
    <a name="" id="" class="btn btn-primary" href="{{route('games.create')}}">Create Game</a>
</div>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Thumb</th>
                <th>Title</th>
                <th>Description</th>
                <th>Cover Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($games as $game)
            <tr>
                <td scope="row">{{$game->id}}</td>
                <td><img width="120" src="{{$game->thumb}}" alt=""></td>
                <td>{{$game->title}}</td>
                <td>{{$game->description}}</td>
                <td><img width="120" src="{{$game->cover_image}}" alt=""></td>
                <td><a href="{{route('games.show',$game->id)}}">View</a> - Edit - Delete</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
