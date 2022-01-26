<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\LvController;
use App\Http\Controllers\highlightsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\HomeController;


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

Route::get('/adminhome',[HomeController::class,'adminhome']);
Route::get('/homepage',[HomeController::class,'home']);

Route::get('/login',[CustomAuthController::class,'login']);
Route::get('/signup',[CustomAuthController::class,'signup']);
Route::get('/adminlogin',[CustomAuthController::class,'adminlogin']);
Route::post('/signup-user',[CustomAuthController::class,'signupUser'])->name('signup-user');
Route::post('/login-user',[CustomAuthController::class,'loginUser'])->name('login-user');
Route::get('/livescore',[CustomAuthController::class,'livescore']);
Route::get('/profile',[CustomAuthController::class,'viewprofile'])->name('view.profile');


Route::get('/livescore',[LvController::class,'livescore']);

Route::get('/highlightspage',[highlightsController::class,'highlightspage']);
Route::get('/add-highlights',[highlightsController::class,'addhighlights'])->name('add.highlights');
Route::post('/add-highlights',[highlightsController::class,'savehighlights'])->name('save.highlights');
Route::get('/update-highlights',[highlightsController::class,'displayTable'])->name('display.highlights');
Route::get('/edit-highlights/{id}',[highlightsController::class,'edithighlights'])->name('edit.highlights');
Route::get('/delete-highlights/{id}',[highlightsController::class,'deletehighlights'])->name('delete.highlights');
Route::post('/update-highlights',[highlightsController::class,'updatehighlights'])->name('update.highlights');
Route::get('/highlightspage',[highlightsController::class,'displayPage'])->name('post.highlights');



Route::get('/newspage',[NewsController::class,'newspage']);
Route::get('/add-news',[NewsController::class,'addNews'])->name('add.news');
Route::post('/add-news',[NewsController::class,'saveNews'])->name('save.news');
Route::get('/update-news',[NewsController::class,'displayTable'])->name('display.news');
Route::get('/edit-news/{id}',[NewsController::class,'editNews'])->name('edit.news');
Route::get('/delete-news/{id}',[NewsController::class,'deleteNews'])->name('delete.news');
Route::post('/update-news',[NewsController::class,'updateNews'])->name('update.news');
Route::get('/newspage',[NewsController::class,'displayPage'])->name('post.news');









