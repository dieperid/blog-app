<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', function (Request $request) {
    return [
        "link" => '/blog/my-article',
    ];
})->name('blog.index');

Route::get('/blog/{slug}-{id}', function (string $slug, string $id, Request $request) {
    return [
        "slug" => $slug,
        "id" => $id,
        "name" => $request->input('name')
    ];
})->where([
    'id' => '[0-9]+',
    'slug' => '[a-z0-9\-]+',
])->name('blog.show');
