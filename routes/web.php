<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\LivescoreController;
use App\Http\Controllers\HighlightController;
use App\Http\Controllers\NewsController;
use App\Models\Highlights;

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

// User Login/Signup
Route::get('/login',[CustomAuthController::class,'login']);
Route::get('/signup',[CustomAuthController::class,'signup']);
Route::post('/signup-user',[CustomAuthController::class,'signupUser'])->name('signup-user');
Route::post('/login-user',[CustomAuthController::class,'loginUser'])->name('login-user');
Route::get('/livescore',[CustomAuthController::class,'livescore']);

// Admin Login/Signup
Route::post('/signup-admin',[AdminAuthController::class,'signupAdmin'])->name('signup-admin');
Route::post('/login-admin',[AdminAuthController::class,'loginAdmin'])->name('login-admin');
Route::get('/admin_login',[AdminAuthController::class,'admin_login']);
Route::get('/admin_signup',[AdminAuthController::class,'admin_signup']);
Route::get('/admin_livescore',[AdminAuthController::class,'admin_livescore']);

// Admin Hightlight
Route::get('/admin_highlights',[HighlightController::class,'addHighlight'])->name('highlight.add');
Route::post('/admin_highlights',[HighlightController::class,'saveHighlight'])->name('save.highlight');
Route::get('/highlights-list',[HighlightController::class,'highlightList'])->name('highlight.list');
Route::get('/edit-highlights/{id}',[HighlightController::class,'editHighlight'])->name('highlight.edit');
Route::get('/delete-highlights/{id}',[HighlightController::class,'deleteHighlight'])->name('highlight.delete');
Route::post('/update-highlights',[HighlightController::class,'updateHighlight'])->name('update.highlight');
Route::get('/highlights',[HighlightController::class,'highlights']);


// Admin LiveScore
Route::get('/admin_livescore',[LivescoreController::class,'addLivescore'])->name('livescore.add');
Route::post('/admin_livescore',[LivescoreController::class,'saveLivescore'])->name('save.livescore');
Route::get('/livescore-list',[LivescoreController::class,'livescoreList'])->name('livescore.list');
Route::get('/edit-livescore/{id}',[LivescoreController::class,'editLivescore'])->name('livescore.edit');
Route::get('/delete-livescore/{id}',[LivescoreController::class,'deleteLivescore'])->name('livescore.delete');
Route::post('/update-livescore',[LivescoreController::class,'updateLivescore'])->name('update.livescore');

// Admin News
Route::get('/admin_news',[NewsController::class,'addNews'])->name('news.add');
Route::post('/admin_news',[NewsController::class,'saveNews'])->name('save.news');
Route::get('/news-list',[NewsController::class,'newsList'])->name('news.list');
Route::get('/edit-news/{id}',[NewsController::class,'editNews'])->name('news.edit');
Route::get('/delete-news/{id}',[NewsController::class,'deleteNews'])->name('news.delete');
Route::post('/update-news',[NewsController::class,'updateNews'])->name('update.news');