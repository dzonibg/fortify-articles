@extends("layouts.main")
@section("content")
<div class="container">
    <p>List of articles.</p>

    <div class="flex-container">
    @foreach($articles as $article)
        <div class="card article" style="flex-grow: 3; width: 45%">
            <h2><a href="/article/{{$article->id}}"> {{ $article->title }} </a></h2>
            <p> {{ $article->body }}</p>
            <hr>
            <p> Written by {{ $article->user->name }} on {{ $article->created_at }}</p>
        </div>
    @endforeach
    </div>

    @auth()
        <p><a href="/article/create"> Write a new article.</a></p>
    @endauth

    <p><a href="/articles/css">Export articles to CSV</a></p>

</div>
@endsection
