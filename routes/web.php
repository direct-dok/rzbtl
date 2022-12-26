<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\IndexController;
use \App\Http\Controllers\HomeController;
use \App\Http\Controllers\PostsController;
use \App\Http\Controllers\CommentController;

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
Route::get('/post/{post}/edit', [PostsController::class, 'showEditPostForm'])->name('post.edit');
Route::get('/post/{post}/delete', [PostsController::class, 'showDeletePostForm'])->name('post.delete');
Route::get('/posts/{category}', [PostsController::class, 'categoryPosts'])->name('posts.category');
Route::post('/posts/save', [PostsController::class, 'savePost'])->name('posts.save');
Route::delete('/post/{post}', [PostsController::class, 'deletePost'])->name('post.destroy');
Route::patch('/post/{post}', [PostsController::class, 'updatePost'])->name('post.update');
Route::get('/post/{category_url}/{post_url}', [PostsController::class, 'pagePost']);

Route::post('/comment/save', [CommentController::class, 'saveComment'])->name('comment.save');
Route::get('/comments/all', [CommentController::class, 'allComments'])->name('comments.all');
Route::get('/comment/approved/page/{id}', [CommentController::class, 'showApprovedPage'])->name('comment.approved.page');
Route::post('/comment/approved/{id}', [CommentController::class, 'approvedComment'])->name('comment.approved');
Route::get('/comment/edit/{id}', [CommentController::class, 'editCommentPage'])->name('edit.comment.page');
Route::patch('/comment/{id}', [CommentController::class, 'updateComment'])->name('comment.update');
Route::get('/comment/delete/{id}', [CommentController::class, 'deletePageComment'])->name('comment.delete.page');
Route::delete('/comment/delete/{comment}', [CommentController::class, 'deleteComment'])->name('comment.delete');

Route::get('/post/all', [PostsController::class, 'showAllPosts'])->name('posts.all.admin');

Route::get('/{url}', [IndexController::class, 'show_page']);
