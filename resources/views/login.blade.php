@extends('layout.app')
@section('content')

    <div class="login-container">
        <h2>Login</h2>

        <!-- Menampilkan notifikasi -->
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        @if (session('error'))
            <div class="alert alert-error">
                {{ session('error') }}
            </div>
        @endif

        <form action="/login" method="POST">
            @csrf
            <label for="username">Username</label>
            <input type="text" id="username" name="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>

            <button type="submit">Login</button>
            <p><a href="#">Forgot Password?</a></p>
        </form>
    </div>
