<?php

use App\Http\Controllers\Etablissement;
use App\Http\Controllers\Identite;
use App\Http\Controllers\LaravelController;
use App\Http\Controllers\LaravelProjetController;
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

Route::get('/identite', [Identite::class,'Identite']);

Route::get('/ecole',[Etablissement::class,'ecole']);

Route::get('/laravel_index',[LaravelController::class,'index']);

Route::get('/formulaire',[LaravelProjetController::class,'form']);

Route::post('/contenu',[LaravelProjetController::class,'resultat']);

Route::get('/approved',[LaravelProjetController::class,'approved']);

Route::get('/disapproved',[LaravelProjetController::class,'disapproved']);

Route::get('/conform',[LaravelProjetController::class,'conform']);

Route::get('/pending',[LaravelProjetController::class,'pending']);

Route::get('/statistique',[LaravelProjetController::class,'statistique']);

Route::get('/laravelproject/show/{id}',[LaravelProjetController::class,'laravelProjectShow'])->name('laravelProjectShow')->where(['id'=>'[0-9]+']);

Route::get('/laravelproject/edit/{id}',[LaravelProjetController::class,'laravelProjectEdit'])->name('laravelProjectEdit')->where(['id'=>'[0-9]+']);

Route::get('/laravelproject/delete/{id}',[LaravelProjetController::class,'laravelProjectDelete'])->name('laravelProjectDelete')->where(['id'=>'[0-9]+']);

Route::post('/laravelproject/edited/{id}',[LaravelProjetController::class,'laravelProjectedited'])->name('laravelProjectEdited')->where(['id'=>'[0-9]+']);
