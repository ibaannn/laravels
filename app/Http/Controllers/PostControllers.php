<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class PostControllers extends Controller
{
    public function index()
    {
        return view('welcome', ['title' => 'Home']);
    }

    public function about()
    {
        return view('about', [
            'title' => 'About',
            'img' => 'gibli.jpg'
        ]);
    }

    public function post()
    {
        return view('post', [
            'title' => 'Post',
            // 'posts' => Post::all()
            'posts' => Post::with(['user', 'category'])->latest()->get()
        ]);
    }

    public function find(Post $post)
    {
        return view('find', [
            'title' => 'Find',
            'post' => $post
        ]);
    }

    public function category(Category $category) {
        return view('category', [
            'title' => $category->name,
            'posts' => $category->posts->load(['category', 'user']),
            'category' => $category->name
        ]);
    }

    public function categories(Category $category) {
        return view('categories', [
            'title' => 'Post Categories',
            'categories' => Category::all()
        ]);
    }

    public function users(User $user) {
        return view('post', [
            'title' => 'Authors',
            'posts' => $user->posts->load(['category', 'user'])
        ]);
    }
}
