@extends('layouts.main')

@section('container')
    <article>
        <h2 class="mb-3">{{ $post["title"] }}</h2>
        <p>{{ $post["body"] }}</p>
    </article>

    <a class="text-info-emphasis" href="/posts">Back to Article</a>
@endsection