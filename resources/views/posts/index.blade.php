@extends('layouts.app')

@section('content')
    <h1>All Posts</h1>

    <a href="{{ route('posts.create') }}" class="button create-button">Create New Post</a>

    @if (session('success'))
        <p class="success-message">{{ session('success') }}</p>
    @endif

    <div class="posts-wrapper">
        @foreach ($posts as $post)
            <div class="post-card">
                <h3>{{ $post->title }}</h3>
                <p>{{ $post->body }}</p>

                <p class="timestamps">
                    📅 Created: {{ $post->created_at->format('M d, Y h:i A') }}<br>
                    ✏️ Updated: {{ $post->updated_at->format('M d, Y h:i A') }}
                </p>

                <div class="actions">
                    <a href="{{ route('posts.edit', $post) }}" class="button edit-button">Edit</a>

                    <form action="{{ route('posts.destroy', $post) }}" method="POST" onsubmit="return confirm('Delete this post?')">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="button delete-button">Delete</button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>

    <style>
        .posts-wrapper {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            margin-top: 20px;
        }

        .post-card {
            flex: 1 1 300px;
            border: 1px solid #ddd;
            padding: 16px;
            border-radius: 8px;
            box-shadow: 2px 2px 8px rgba(0,0,0,0.1);
            background-color: #fff;
        }

        .post-card h3 {
            margin-top: 0;
        }

        .timestamps {
            font-size: 0.85rem;
            color: #666;
            margin: 10px 0;
        }

        .actions {
            display: flex;
            gap: 10px;
            margin-top: 10px;
        }

        .button {
            padding: 6px 12px;
            text-decoration: none;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .create-button {
            background-color: #3490dc;
            color: #fff;
            margin-bottom: 16px;
            display: inline-block;
        }

        .edit-button {
            background-color: #ffc107;
            color: #000;
        }

        .delete-button {
            background-color: #e3342f;
            color: #fff;
        }

        .success-message {
            color: green;
            margin: 10px 0;
        }
    </style>
@endsection
