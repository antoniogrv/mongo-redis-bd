<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('users', function (Request $request) {
    return \App\Models\Author::all();
});

Route::get('get', function (Request $request) {
    return Cache::get('test');
});

Route::get('set', function (Request $request) {
    return Cache::set('test', random_int(0, 100));
});
