@extends("layouts.main")
@section("content")
    <div class="container center">
        <div class="card">
            <form method="POST" action="login">
                <input type="text" name="email" placeholder="E-mail" autofocus required>
                <br>
                <input type="text" name="password" placeholder="Password" required>
                <br>
                <button class="btn" type="submit">Login</button>
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
