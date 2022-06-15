<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\VoteController;
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
    return redirect(route('article.index'));
});


Route::resource('article', ArticleController::class);

Route::post('/article/{article}/upvote', [VoteController::class, 'upvote'])->name('vote.up');
Route::post('/article/{article}/downvote', [VoteController::class, 'downvote'])->name('vote.down');
