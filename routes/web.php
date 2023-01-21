<?php

use App\Http\Controllers\NoteController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TrashedNoteController;
use App\Http\Controllers\ProfileController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::resource('/notes', NoteController::class)->middleware(['auth']);

Route::prefix('/trashed')->name('trashed.')->middleware('auth')->group(function(){
    Route::get('/', [TrashedNoteController::class, 'index'])->name('index');
    Route::get('/{note}', [TrashedNoteController::class, 'show'])->name('show')->withTrashed();
    Route::put('/{note}', [TrashedNoteController::class, 'update'])->name('update')->withTrashed();
    Route::delete('/{note}', [TrashedNoteController::class, 'destroy'])->name('destroy')->withTrashed();
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

//Route::get('/posts', function () {
//    return view('layouts.post', [
//        'posts' => Post::latest('updated_at')->with('category', 'author')->get()
//    ]);
//});
//
//Route::get('posts/{post:slug}', function (Post $post) {
//    return view('posts.post', [
//        'post' => $post
//    ]);
//});
//
//Route::get('categories/{category:slug}', function (Category $category) {
//    return view('posts.posts', [
//        'posts' => $category->posts
//    ]);
//});
//
//Route::get('authors/{author}', function (User $author) {
//    return view('posts.posts', [
//        'posts' => $author->posts
//    ]);
//});

Route::get('/posts', [PostController::class, 'index']);

require __DIR__.'/auth.php';
