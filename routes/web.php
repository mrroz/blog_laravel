<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

// Route::get('V1/add', function () {
//     return view('add');
// })->name('post.add');


Route::get('/login',[PostController::class,'login'])->name('post.login');

Route::get('/add',[PostController::class,'add'])->name('post.add');

Route::get('/posts',[PostController::class,'show'])->name('post.show');

 Route::post('/posts',[PostController::class,'create'])->name('post.create');

 Route::get('/posts/{post}',[PostController::class,'delete'])->name('post.delete');


