@extends('layouts.app')

@section('content')
    <h2>Login</h2>
    <p>Ready to dive in? Log in first!</p>

    <form action="{{ route('login.handle') }}" method="POST">
        @csrf <div class="form-group">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit">Login</button>
    </form>
@endsection
