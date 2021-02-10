@extends("layouts.main")
@section("content")

    <div class="container">
        <p class="center">Write a new article</p>
    <div class="card article">
        <form method="POST" action="/article">
            @csrf
        <input class="article-input" type="text" name="title" placeholder="New Article">
        <br>
            <textarea name="body" class="article-input" style="width: 100%; height: 30em; background-color: burlywood"></textarea>
            <br>
            <div class="right">
        <button type="submit" class="btn article-submit">Post the article</button>
            </div>
        </form>
    </div>
    </div>

@endsection
