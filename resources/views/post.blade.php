@extends('layouts.main')

@include('sidebar.navbar')

@section('template')
    @foreach ($posts as $post)
        <ul>
            <li>
                <div class="mb-4">
                    <a class="text-decoration-none" href="/find/{{ $post->slug }}">
                        <h2>{{ $post->title }}</h2>
                    </a>
                    <h6>By. <a class="text-decoration-none" href="/author/{{ $post->user->username }}">{{ $post->user->name }}</a> in <a
                            class="text-decoration-none"
                            href="/categories/{{ $post->category->slug }}">{{ $post->category->name }}</a></h6>
                    <h5>{{ $post->excerpt }}</h5>
                </div>
            </li>
        </ul>
    @endforeach
@endsection
