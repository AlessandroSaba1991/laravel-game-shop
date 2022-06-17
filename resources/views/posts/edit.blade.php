@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Edit {{$post->title}}</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <!-- Puntare ad una rotta POST -->
    <form action="{{route('posts.update',$post->id)}}" method="post">
        @csrf
        @method('PUT')
        <div class="form-group">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Title" aria-describedby="titleHelper" value="{{$post->title}}">
                <small id="titleHelper" class="text-muted">Write a title</small>
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label for="cover_image" class="form-label">Cover Image</label>
                <input type="text" name="cover_image" id="cover_image" class="form-control @error('cover_image') is-invalid @enderror" placeholder="cover_image" aria-describedby="cover_imageHelper" value="{{$post->cover_image}}">
                <small id="cover_imageHelper" class="text-muted">Insert Cover Image http</small>
                @error('cover_image')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label for="body" class="form-label">Body</label>
                <textarea type="text" name="body" id="body" class="form-control @error('body') is-invalid @enderror" placeholder="body" rows="5" aria-describedby="bodyHelper">{{$post->body}}</textarea>
                @error('body')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
