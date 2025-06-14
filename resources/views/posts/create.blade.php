@extends('layouts.app')

@section('content')
    <h1>Create New Post</h1>

    <form method="POST" action="{{ route('posts.store') }}">
        @csrf

        <label>Title:</label>
        <input type="text" name="title" value="{{ old('title') }}" required>
        @error('title') <p>{{ $message }}</p> @enderror

        <label>Body:</label>
        <textarea name="body" required>{{ old('body') }}</textarea>
        @error('body') <p>{{ $message }}</p> @enderror

        <button type="submit">Save</button>
    </form>
@endsection
