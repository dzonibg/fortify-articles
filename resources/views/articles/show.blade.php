@extends("layouts.main")
@section("content")
    <div class="container">
        <div class="card article">
    <h3> {{ $article->title }} </h3>
            <hr>
    <p> {{$article->body }} </p>
    <p> Written by {{$article->user->name }} on {{ $article->created_at }} </p>
    </div>
    </div>
@endsection
