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
    return view('login');
})->name('login');


Route::get('/accueil', function () {
    return view('welcome');
    })->name('accueil');

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


//Matiere

Route::get('/matiere_ins', function () {
    return view('matieres.inscription');
});
Route::get('/matieres',[\App\Http\Controllers\MatiereController::class,'index'])->name('matiere.index');
Route::post('/matiere',[\App\Http\Controllers\MatiereController::class,'store'])->name('matiere.store');
Route::get('/matiere/{id}/edit',[\App\Http\Controllers\MatiereController::class, 'edit'])->name('matiere.edit');
Route::get('/matiere/{id}/update',[\App\Http\Controllers\MatiereController::class,'update'])->name('matiere.update');
Route::put('/matiere/{id}/update',[\App\Http\Controllers\MatiereController::class,'update'])->name('matiere.update');
Route::get('matiere/{id}/delete',[\App\Http\Controllers\MatiereController::class, 'delete'])->name('matiere.delete');



Route::get('/classe_ins', function () {
    return view('classes.inscription');
});
Route::get('/classes',[\App\Http\Controllers\ClasseController::class,'index'])->name('classe.index');
Route::post('/classe',[\App\Http\Controllers\ClasseController::class,'store'])->name('classe.store');
Route::get('/classe/{id}/edit',[\App\Http\Controllers\ClasseController::class, 'edit'])->name('classe.edit');
Route::get('/classe/{id}/update',[\App\Http\Controllers\ClasseController::class,'update'])->name('classe.update');
Route::put('/classe/{id}/update',[\App\Http\Controllers\ClasseController::class,'update'])->name('classe.update');
Route::get('classe/{id}/delete',[\App\Http\Controllers\ClasseController::class, 'delete'])->name('classe.delete');




Route::get('/inscription_ins', function () {
    return view('inscriptions.inscription');
});
Route::get('/inscriptions',[\App\Http\Controllers\InscriptionController::class,'index'])->name('inscription.index');
Route::post('/inscription',[\App\Http\Controllers\InscriptionController::class,'store'])->name('inscription.store');
Route::get('/inscription/{id}/edit',[\App\Http\Controllers\InscriptionController::class, 'edit'])->name('inscription.edit');
Route::get('/inscription/{id}/update',[\App\Http\Controllers\InscriptionController::class,'update'])->name('inscription.update');
Route::put('/inscription/{id}/update',[\App\Http\Controllers\InscriptionController::class,'update'])->name('inscription.update');
Route::get('inscription/{id}/delete',[\App\Http\Controllers\InscriptionController::class, 'delete'])->name('inscription.delete');



Route::get('/user_ins', function () {
    return view('users.inscription');
});
Route::get('/users',[\App\Http\Controllers\UserController::class,'index'])->name('user.index');
Route::post('/user',[\App\Http\Controllers\UserController::class,'store'])->name('user.store');
Route::get('/user/{id}/edit',[\App\Http\Controllers\UserController::class, 'edit'])->name('user.edit');
Route::get('/user/{id}/update',[\App\Http\Controllers\UserController::class,'update'])->name('user.update');
Route::put('/user/{id}/update',[\App\Http\Controllers\UserController::class,'update'])->name('user.update');
Route::get('user/{id}/delete',[\App\Http\Controllers\UserController::class, 'delete'])->name('user.delete');
