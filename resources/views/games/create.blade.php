@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Create a new Game</h1>
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
    <form action="{{route('games.store')}}" method="post">
        @csrf
        <div class="form-group">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" placeholder="Title" aria-describedby="titleHelper" value="{{old('title')}}">
                <small id="titleHelper" class="text-muted">Write a title</small>
                @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumbnail</label>
                <input type="text" name="thumb" id="thumb" class="form-control @error('thumb') is-invalid @enderror" placeholder="thumb" aria-describedby="thumbHelper" value="{{old('thumb')}}">
                <small id="thumbHelper" class="text-muted">Insert thumbnail http</small>
                @error('thumb')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label for="cover_image" class="form-label">Cover Image</label>
                <input type="text" name="cover_image" id="cover_image" class="form-control @error('cover_image') is-invalid @enderror" placeholder="cover_image" aria-describedby="cover_imageHelper" value="{{old('cover_image')}}">
                <small id="cover_imageHelper" class="text-muted">Insert Cover Image http</small>
                @error('cover_image')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror" placeholder="description" rows="5" aria-describedby="descriptionHelper">{{old('description')}}</textarea>
                @error('description')
                <div class="alert alert-danger">{{ $message }}</div>
                @enderror
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Add Game</button>
    </form>
</div>
@endsection
