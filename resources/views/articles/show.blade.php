@extends("layouts.main")
@section("content")
    <div class="container">
        <div class="card article">
    <h3> {{ $article->title }} </h3>
            <hr>
    <p> {{$article->body }} </p>
    <p> Written by {{$article->user->name }} on {{ $article->created_at }} </p>
    </div>
        <form action="/article/{{$article->id}}" method="POST">
            @method("DELETE")
            <input type="hidden" name="id" value="{{$article->id}}">
            @csrf
            <button type="submit" class="btn">Delete</button>
        </form>
    </div>
@endsection
