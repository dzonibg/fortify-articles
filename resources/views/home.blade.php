@extends("layouts.main")
@section("content")
    <div class="container">
        @guest()
            <div class="card">
                <p>You are a guest.</p>
            </div>
        @endguest

        @auth()
            <div class="card">
                <p>You are logged in as {{ auth()->user()->name }}. </p>
                <p>You have written {{ auth()->user()->article()->count() }} articles.</p>
            </div>
        @endauth
    </div>
@endsection
