@extends('layouts.app')
@section('content')
<div class="heading text-center py-5">
    <h1>Posts</h1>
    <a name="" id="" class="btn btn-primary" href="{{route('posts.create')}}">Create Posts</a>
</div>
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Body</th>
                <th>Cover Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse($posts as $post)
            <tr>
                <td scope="row">{{$post->id}}</td>
                <td>{{$post->title}}</td>
                <td>{{$post->body}}</td>
                <td><img width="120" src="{{$post->cover_image}}" alt=""></td>
                <td><a href="{{route('posts.show',$post->id)}}">View</a> - Edit - Delete</td>
            </tr>
            @empty
            <td scope="row">nothing to show</td>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
