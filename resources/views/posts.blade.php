@extends('layouts.main')

@section('container')
    <h1>Halaman Blog Spots</h1>
    @foreach ($posts as $post)
    <article class="mb-5">
            <h2>
                <a href="/posts/{{ $post["slug"] }}">{{ $post["title"] }}</a>
            </h2>
            <p>{{ $post["body"] }}</p>
        </article>
    @endforeach
@endsection

