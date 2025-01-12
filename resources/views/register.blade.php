@extends('layout.app')
@section('content')

    <body>
        <div class="signup-container">
            <h2>Signup</h2>

            <!-- Menampilkan pesan sukses atau error -->
            @if (session('success'))
                <div class="success-message">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="message-container">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="/signup" method="POST">
                @csrf <!-- CSRF Token untuk keamanan -->
                <label for="name">Name</label>
                <input type="text" id="name" name="name" value="{{ old('name') }}" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}" required>

                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>

                <label for="password_confirmation">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation" required>

                <button type="submit">Sign Up</button>
            </form>
        </div>
    </body>
