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


Route::get('/add',[PostController::class,'add'])->name('post.add');

Route::get('V1/posts',[PostController::class,'show'])->name('post.show');

 Route::post('V1/posts',[PostController::class,'create'])->name('post.create');

 Route::get('V1/posts/{post}',[PostController::class,'delete'])->name('post.delete');


