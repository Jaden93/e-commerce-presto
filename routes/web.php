<?php

use App\Http\Controllers\AnnouncementController;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\RevisorController;
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

Route::get('/', [PublicController::class,'index'])->name('homepage');

Route::get('/login&register',function(){

        return view('auth.login_register');

})->name('login_register');


Route::get('/create/announcement',[AnnouncementController::class,'create'])->name('announcement.create');
Route::post('/store',[AnnouncementController::class,'store'])->name('announcement.store');
Route::get('/category/{name}/{id}',[PublicController::class,'byCategory'])->name('byCategory');
Route::get('/announcement/show/{announcement}' , [AnnouncementController::class,'show'])->name('announcement.show');

//revisione
Route::get('/revisor/index', [RevisorController::class,'index'])->name('revisor.index');
Route::get('/revisor/recovery', [RevisorController::class,'recovery'])->name('revisor.recovery');
Route::post('/revisor/announcement/{id}/accept',[RevisorController::class,'accept'])->name('revisor.accept');
Route::post('/revisor/announcement/{id}/reject',[RevisorController::class,'reject'])->name('revisor.reject');


//Ricerca
Route::get('/search', [AnnouncementController::class , 'search'])->name('announcement.search');
