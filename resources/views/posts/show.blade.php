@extends('layouts.app')

@section('title', $post->title)

@section('content')
<h1 class="text-center text-primary mb-4">{{ $post->title }}</h1>

<div class="card mb-3">
    <div class="card-body">
        <p class="card-text">{{ $post->content }}</p>
    </div>
</div>

<a href="/posts" class="btn btn-secondary">Back to Posts</a>
@endsection
