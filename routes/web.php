<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CoursController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
    });

Route::get('/profiles',[ProfileController::class,'index'])->name('profile.index');
Route::post('/profile',[ProfileController::class,'store'])->name('profile.store');
Route::get('profile/{id}/delete',[ProfileController::class, 'delete'])->name('profile.delete');
Route::get('/profile/{id}/update',[ProfileController::class,'update'])->name('profile.update');
Route::get('/profile/{id}/edit',[ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile/{id}/update',[ProfileController::class,'update'])->name('profile.update');


Route::get('/cours',[CoursController::class,'index'])->name('cours.index');
Route::post('/cour',[CoursController::class,'store'])->name('cour.store');
Route::get('cours/{id}/delete',[CoursController::class, 'delete'])->name('cours.delete');
Route::get('/cours/{id}/update',[CoursController::class,'update'])->name('cours.update');
Route::get('/cours/{id}/edit',[CoursController::class, 'edit'])->name('cours.edit');
// Route::put('/cours/{id}/upd ate',[CoursController::class,'update'])->name('cours.update');
Route::put('/cours/{id}', 'CoursController@update')->name('cours.update');


//Route::get('/enseignants',[\App\Http\Controllers\EnseignantController::class,'index'])->name('enseignant.index');
Route::get('/enseignants',[\App\Http\Controllers\EnseignantController::class,'index'])->name('enseignant.index');
Route::post('/enseignant',[\App\Http\Controllers\EnseignantController::class,'store'])->name('enseignant.store');
//Route::get('/enseignant',[\App\Http\Controllers\EnseignantController::class,'store'])->name('enseignant.store');
Route::get('/enseignant/{id}/edit',[\App\Http\Controllers\EnseignantController::class, 'edit'])->name('enseignant.edit');
Route::get('/enseignant/{id}/update',[\App\Http\Controllers\EnseignantController::class,'update'])->name('enseignant.update');
Route::put('/enseignant/{id}/update',[\App\Http\Controllers\EnseignantController::class,'update'])->name('enseignant.update');
Route::get('enseignant/{id}/delete',[\App\Http\Controllers\EnseignantController::class, 'delete'])->name('enseignant.delete');


//Création d'en new route pour l'inscription
Route::get('/enseignant_ins', function () {
    return view('enseignants.inscription');
});
