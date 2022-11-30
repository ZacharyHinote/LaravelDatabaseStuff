<?php
use App\Http\Controllers\PostController;
use App\Http\Controllers\ApiController;
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

Route::get('/', [ApiController::class, 'index'])->name('movies');

Route::get('/posts', [PostController::class, 'getAllPost'])->name('getallpost');

//Add data to the table

Route::get('/add-post', [PostController::class, 'addPost'])->name('addpost');

Route::post('/add-post', [PostController::class, 'addPostSubmit'])->name('addSubmit');

Route::get('/posts/{id}', [PostController::class, 'getPostById'])->name('getpostbyid');

Route::get('delete-post/{id}', [Postcontroller::class, 'deletePost'])->name('deletepost');