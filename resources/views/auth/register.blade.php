@extends("layouts.main")
@section("content")
    <div class="container center">
        <div class="card">
        <form method="POST" action="/register">
            <input type="text" name="name" placeholder="Name" required>
            <br>
            <input type="text" name="email" placeholder="E-mail" required>
            <br>
            <input type="text" name="password" placeholder="Password" required>
            <br>
            <input type="text" name="password_confirmation" placeholder="Repeat password" required>
            <br>
            <button type="submit" class="btn">Register</button>
            @csrf
        </form>
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
        </div>
    </div>
@endsection
