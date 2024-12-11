@extends('layouts.app')

@section('title', 'Edit Post')

@section('content')
<h1 class="text-center text-primary mb-4">Edit Post</h1>

<form action="/posts/{{ $post->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
    </div>
    <div class="mb-3">
        <label for="content" class="form-label">Content</label>
        <textarea class="form-control" id="content" name="content" rows="4" required>{{ $post->content }}</textarea>
    </div>
    <button type="submit" class="btn btn-warning">Update Post</button>
</form>
@endsection
