@extends('layouts.app')

@section('title', 'Create Post')

@section('content')
<h1>Upload Multiple Images</h1>
    <form method="POST" action="{{ route('images.store') }}" enctype="multipart/form-data">
        @csrf
        <input type="file" name="images[]" multiple>
        <button type="submit">Upload</button>
    </form>
@endsection

