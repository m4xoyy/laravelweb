@extends('layouts.app')

@section('content')
<div class="auth-wrapper">
    <h2 style="text-align: center; margin-bottom: 1.5rem;">Register</h2>

    @if ($errors->any())
        <div class="error-message">
            @foreach ($errors->all() as $error)
                <div>{{ $error }}</div>
            @endforeach
        </div>
    @endif

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <label for="name">Name</label>
        <input type="text" name="name" value="{{ old('name') }}" required>

        <label for="email">Email</label>
        <input type="email" name="email" value="{{ old('email') }}" required>

        <label for="password">Password</label>
        <input type="password" name="password" required>

        <label for="password_confirmation">Confirm Password</label>
        <input type="password" name="password_confirmation" required>

        <button type="submit" class="button" style="width: 100%;">Register</button>
    </form>

    <p style="text-align: center; margin-top: 1rem;">
        <a href="{{ route('login') }}">Already have an account?</a>
    </p>
</div>
@endsection
