@extends('layouts.app')

@section('content')
    <div class="login-container">
        <h1 class="login-title">Login</h1>

        @if (session('error'))
            <p class="error-message">{{ session('error') }}</p>
        @endif

        <form method="POST" action="{{ route('login') }}" class="login-form">
            @csrf

            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="{{ old('email') }}" required>
                @error('email') <p class="error-message">{{ $message }}</p> @enderror
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="password" required>
                @error('password') <p class="error-message">{{ $message }}</p> @enderror
            </div>

            <button type="submit" class="login-button">Login</button>
        </form>
    </div>

    <style>
        .login-container {
            max-width: 400px;
            margin: 80px auto;
            background: #fff;
            padding: 32px;
            border-radius: 12px;
            box-shadow: 0 8px 16px rgba(0,0,0,0.1);
        }

        .login-title {
            font-size: 28px;
            margin-bottom: 24px;
            text-align: center;
        }

        .login-form .form-group {
            margin-bottom: 18px;
        }

        .login-form label {
            display: block;
            margin-bottom: 6px;
            font-weight: bold;
        }

        .login-form input {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
        }

        .login-button {
            width: 100%;
            padding: 12px;
            background-color: #4f46e5;
            color: white;
            border: none;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }

        .login-button:hover {
            background-color: #3730a3;
        }

        .error-message {
            color: red;
            font-size: 14px;
        }
    </style>
@endsection
