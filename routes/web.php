<?php

use App\Http\Controllers\AdminCategoryController;
use App\Models\Category;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\AdminPostController;

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

//dashboard
Route::get('/', function () {
    return view('dashboard/home', [
        "title" => "dashboard/home",
        "active" => "dashboard/home"
    ]);
});

Route::get('buku-terbaru', function () {
    return view('dashboard/buku_terbaru', [
        "title" => "dashboard/buku_terbaru",
        "active" => "dashboard/buku_terbaru"
    ]);
});

Route::get('buku-terlaris', function () {
    return view('dashboard/buku_terlaris', [
        "title" => "dashboard/buku_terlaris",
        "active" => "dashboard/buku_terlaris"
    ]);
});



//e-book
Route::get('ebook', function () {
    return view('ebook/ebook', [
        "title" => "ebook/ebook",
        "active" => "ebook/ebook"
    ]);
});

//profile
Route::get('profile-perpust', function () {
    return view('profile/profile', [
        "title" => "profile/profile",
        "active" => "profile/profile"
    ]);
});

//galery
Route::get('galery', function () {
    return view('galery/galery', [
        "title" => "galery/galery",
        "active" => "galery/galery"
    ]);
});

//sirkulasi
Route::get('sirkulasi', function () {
    return view('sirkulasi/sirkulasi', [
        "title" => "sirkulasi/sirkulasi",
        "active" => "sirkulasi/sirkulasi"
    ]);
});



Route::get('/posts', [PostController::class, 'index']);

Route::get('posts/{post:slug}', [PostController::class, 'show']);

Route::get('/categories', function() {
    return view('article.categories', [
        'title' => 'Post Categoris',
        'active' => 'categories',
        'categories' => Category::all()
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/admin', function(){
    return view('admin.index');
})->middleware('admin');

Route::get('/admin/posts/checkSlug', [AdminPostController::class, 'checkSlug'])->middleware('admin');
Route::resource('/admin/posts', AdminPostController::class)->middleware('admin');

Route::get('/admin/categories/checkSlug', [AdminCategoryController::class, 'checkSlug'])->middleware('auth');
Route::resource('/admin/categories', AdminCategoryController::class)->except('show')->middleware('admin');