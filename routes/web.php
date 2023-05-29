<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\PostController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('pages.home', [
        'posts' => \App\Models\Post::all()->sortByDesc('created_at')
    ]);
})->name('home');

Route::get('/posts/search', function (Request $request) {
    return view('pages.home', [
        'posts' => \App\Models\Post::query()
            ->when($request->isNotFilled('exact'), function($q) use ($request) {
                $q->where('title', 'like', '%' . $request->input('query') . '%');
            })
            ->when($request->filled('exact'), function($q) use ($request) {
                $q->where('title', '=', $request->input('query'));
            })
            ->get()
    ]);
})->name('posts.search');

Route::resources([
    'posts' => PostController::class,
    'comments' => CommentController::class,
]);
