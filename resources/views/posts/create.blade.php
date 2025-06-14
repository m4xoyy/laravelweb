@extends('layouts.app')

@section('content')
    <style>
        .form-container {
            max-width: 600px;
            margin: 40px auto;
            padding: 24px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
            border-radius: 8px;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
            font-family: Arial, sans-serif;
        }

        .form-container h1 {
            text-align: center;
            margin-bottom: 24px;
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 1rem;
        }

        textarea {
            resize: vertical;
            min-height: 100px;
        }

        .text-danger {
            color: red;
            font-size: 0.875rem;
            margin-top: -12px;
            margin-bottom: 12px;
        }

        .submit-btn {
            background-color: #28a745;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 4px;
            cursor: pointer;
            transition: background-color 0.2s ease;
        }

        .submit-btn:hover {
            background-color: #218838;
        }
    </style>

    <div class="form-container">
        <h1>Create New Post</h1>

        <form method="POST" action="{{ route('posts.store') }}">
            @csrf

            <label for="title">Title:</label>
            <input type="text" name="title" value="{{ old('title') }}" required>
            @error('title')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <label for="body">Body:</label>
            <textarea name="body" required>{{ old('body') }}</textarea>
            @error('body')
                <div class="text-danger">{{ $message }}</div>
            @enderror

            <button type="submit" class="submit-btn">Create Post</button>
        </form>
    </div>
@endsection
