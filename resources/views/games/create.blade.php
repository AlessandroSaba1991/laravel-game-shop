@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Create a new Game</h1>
    <!-- Puntare ad una rotta POST -->
    <form action="{{route('games.store')}}" method="post">
        @csrf
        <div class="form-group">
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control" placeholder="Title" aria-describedby="titleHelper">
                <small id="titleHelper" class="text-muted">Write a title</small>
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label for="thumb" class="form-label">Thumbnail</label>
                <input type="text" name="thumb" id="thumb" class="form-control" placeholder="thumb" aria-describedby="thumbHelper">
                <small id="thumbHelper" class="text-muted">Insert thumbnail http</small>
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label for="cover_image" class="form-label">Cover Image</label>
                <input type="text" name="cover_image" id="cover_image" class="form-control" placeholder="cover_image" aria-describedby="cover_imageHelper">
                <small id="cover_imageHelper" class="text-muted">Insert Cover Image http</small>
            </div>
        </div>
        <div class="form-group">
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea type="text" name="description" id="description" class="form-control" placeholder="description" rows="5" aria-describedby="descriptionHelper"></textarea>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Add Game</button>
    </form>
</div>
@endsection
