@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <h1>Edit Post</h1>

        <form method="POST" action="{{ route('posts.update', $post->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="title" class="form-label">Title:</label>
                <input type="text" name="title" class="form-control" value="{{ old('title', $post->title) }}" required>
                @error('title') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <div class="mb-3">
                <label for="body" class="form-label">Body:</label>
                <textarea name="body" class="form-control" required>{{ old('body', $post->body) }}</textarea>
                @error('body') <small class="text-danger">{{ $message }}</small> @enderror
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
