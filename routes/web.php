<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\IndexController;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\PostsController;

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

/* Маршруты для главной страницы */
Route::get('/', [IndexController::class, 'index']);
Route::redirect('/front', '/');
/* Маршруты для главной страницы */

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/page/all', [IndexController::class, 'showAllPages'])->name('page.all');
Route::get('/page/add', [IndexController::class, 'showAddPageForm'])->name('page.add');
Route::post('/page/save', [IndexController::class, 'savePage'])->name('page.save');
Route::get('/page/{pg}/edit', [IndexController::class, 'showEditPageForm'])->name('page.edit');
Route::patch('/page/{pg}', [IndexController::class, 'updatePage'])->name('page.update');
Route::get('/page/{pg}/delete', [IndexController::class, 'showDeletePageForm'])->name('page.delete');
Route::delete('/page/{pg}', [IndexController::class, 'deletePage'])->name('page.destroy');


Route::get('/posts', [PostsController::class, 'allPosts'])->name('posts.all');
Route::get('/posts/add', [PostsController::class, 'addPost'])->name('posts.add');
Route::post('/posts/save', [PostsController::class, 'savePost'])->name('posts.save');
Route::get('/post/{post}/edit', [PostsController::class, 'showEditPostForm'])->name('post.edit');
Route::patch('/post/{post}', [PostsController::class, 'updatePost'])->name('post.update');
Route::get('/post/{category_url}/{post_url}', [PostsController::class, 'pagePost']);

Route::get('/post/all', [PostsController::class, 'showAllPosts'])->name('posts.all.admin');


Route::get('/{url}', [IndexController::class, 'show_page']);
