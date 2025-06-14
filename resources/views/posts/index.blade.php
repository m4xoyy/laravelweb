@extends('layouts.app')

@section('content')
    <h1>All Posts</h1>

    <a href="{{ route('posts.create') }}">Create New Post</a>

    @if (session('success'))
        <p>{{ session('success') }}</p>
    @endif

    <ul>
        @foreach ($posts as $post)
            <li>
                <strong>{{ $post->title }}</strong><br>
                {{ $post->body }}
            </li>
        @endforeach
    </ul>
@endsection
