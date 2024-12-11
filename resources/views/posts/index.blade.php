
@extends('layouts.app')

@section('title', 'All Posts')

@section('content')
<h1 class="text-center text-primary mb-4">All Posts</h1>

<div class="mb-3">
    <a href="/posts/create" class="btn btn-success">Create New Post</a>
</div>

<div id="postsList">
    @foreach ($posts as $post)
    <div class="card mb-3" id="post-{{ $post->id }}">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ \Str::limit($post->content, 100) }}</p>
            <a href="/posts/{{ $post->id }}/edit" class="btn btn-warning">Edit</a>
            <a href="/posts/{{ $post->id }}" class="btn btn-info">View</a>
            <button class="btn btn-danger deleteBtn" data-id="{{ $post->id }}" data-title="{{ $post->title }}">Delete</button>
        </div>
    </div>
    @endforeach
</div>
@endsection

@section('scripts')
<script src="{{ asset('js/posts.js') }}"></script>
@endsection
