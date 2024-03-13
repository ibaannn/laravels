@extends('layouts.main')

@include('sidebar.navbar')

@section('template')
<h4>Categories</h4>
    @foreach ($categories as $category)
    <ul>
        <li>
            <div class="mb-4">
                <a href="/categories/{{ $category->slug }}">
                    <h2>{{ $category->name }}</h2>
                </a>
            </div>
        </li>
    </ul>
    @endforeach
@endsection
