@extends('layouts.app')

@section('title', 'Create Post')

@section('content')
<h1 class="text-center text-primary mb-4">Create New Post</h1>

<form action="/posts" method="POST">
    @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" required>
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <textarea class="form-control" id="content" name="content" rows="4" required></textarea>
    </div>
    <button type="submit" class="btn btn-success">Create Post</button>
</form>
@endsection
