@extends('layouts.main')

@include('sidebar.navbar')

@section('template')
    <h2>{{ $post->title }}</h2>
    <h5>By. <a href="/post">{{ $post->user->name }}</a> in <a href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h5>
    <p>{{ $post->body }} <a href="/post">Back</a></p>
@endsection
