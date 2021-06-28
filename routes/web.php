<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogPostController;

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

Route::get('/', function () {return view('home');});

// index is used to grab the whole collection
Route::get('/blog', [\App\Http\Controllers\BlogPostController::class, 'index']);

// show is used to grab individual items
Route::get('/blog/{blogPost}', [\App\Http\Controllers\BlogPostController::class, 'show']);

//
Route::get('/blog/{blogPost}/edit', [\App\Http\Controllers\BlogPostController::class, 'edit']); 

//
Route::put('/blog/{blogPost}/edit', [\App\Http\Controllers\BlogPostController::class, 'update']);  

//
Route::delete('/blog/{blogPost}', [\App\Http\Controllers\BlogPostController::class, 'destroy']); 

Route::get('/create', [\App\Http\Controllers\BlogPostController::class, 'create']);

// Route::post('/blog/create', [\App\Http\Controllers\BlogPostController::class, 'store']); 
