<?php

use App\Http\Controllers\PostControllers;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [PostControllers::class, 'index']);

Route::get('/about', [PostControllers::class, 'about']);

Route::get('/post', [PostControllers::class, 'post']);

Route::get('/find/{post:slug}', [PostControllers::class, 'find']);

Route::get('/categories/{category:slug}', [PostControllers::class, 'category']);

Route::get('/category', [PostControllers::class, 'categories']);

Route::get('/author/{user:username}', [PostControllers::class, 'users']);


