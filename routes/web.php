<?php

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

//Tweet
Route::get('/tweet', \App\Http\Controllers\Tweet\IndexController::class)
->name('tweet.index');
Route::post('/tweet/create', \App\Http\Controllers\Tweet\CreateController::class)
->middleware('auth') //ログインしている人のみ投稿可能にする
->name('tweet.create');
Route::get('/tweet/update/{tweetId}', \App\Http\Controllers\Tweet\update\IndexController::class)
->name('tweet.update.index');
Route::put('/tweet/update/{tweetId}', \App\Http\Controllers\Tweet\update\PutController::class)
->name('tweet.update.put');
Route::get('/tweet', \App\Http\Controllers\Tweet\IndexController::class)
->name('tweet.index');
Route::delete('/tweet/delete/{tweetId}', \App\Http\Controllers\Tweet\DeleteController::class)
->name('tweet.delete');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
