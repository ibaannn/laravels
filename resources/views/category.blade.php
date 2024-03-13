@extends('layouts.main')

@include('sidebar.navbar')

@section('template')
<h4>Post Category : {{ $category }}</h4>
    @foreach ($posts as $post)
        <div class="mb-4">
            <a href="/find/{{ $post->slug }}">
                <h2>{{ $post->title }}</h2>
            </a>
            <h5>{{ $post->excerpt }}</h5>
        </div>
    @endforeach
@endsection
