@extends('layouts.main')

@section('container')
    <h1 class="mb-5">{{ $post->title }}</h1>
    <p>By <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> in <a class="text-decoration-none" href="/category/{{ $post->category->slug }}">{{ $post->category->name }}</a></p>
    {!! $post->body !!}
    <a class="text-decoration-none d-block mt-3" href="/posts">Back to Posts</a>
@endsection
