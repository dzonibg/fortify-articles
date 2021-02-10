@extends("layouts.main")
@section("content")
    <div class="container">
        <div class="card article">
    <p> {{ $article->title }} </p>
    <p> {{$article->body }} </p>
    <p> {{$article->user_id }} </p>
    </div>
    </div>
@endsection
