<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\NoteController;
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

// Routes de la page d'accueil
    Route::get('/', function () {
        return view('welcome');
        });

// Routes du profil de chaque utilisateur
    Route::get('/profile',[ProfileController::class,'index'])->name('profile.index');
    Route::post('/profile',[ProfileController::class,'store'])->name('profile.store');
    Route::get('profile/{id}/delete',[ProfileController::class, 'delete'])->name('profile.delete');
    Route::get('/profile/{id}/update',[ProfileController::class,'update'])->name('profile.update');
    Route::get('/profile/{id}/edit',[ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile/{id}/update',[ProfileController::class,'update'])->name('profile.update');

// Routes du cours
    Route::get('/cours',[CoursController::class,'index'])->name('cours.index');
    Route::post('/cours',[CoursController::class,'store'])->name('cours.store');
    Route::get('/cours/{id}/edit',[CoursController::class, 'edit'])->name('cours.edit');
    Route::get('/cours/{id}/update',[CoursController::class,'update'])->name('cours.update');
    Route::put('/cours/{id}/update',[CoursController::class,'update'])->name('cours.update');
    Route::get('cours/{id}/delete',[CoursController::class, 'delete'])->name('cours.delete');

    //Création d'une mouvelle route pour l'ajout d'un nouveau cours
    Route::get('/nouveau_cours', function () {
        return view('cours.FormulaireCours');
    });

// Routes de l'élẽve
    Route::get('eleves',[EleveController::class,'index'])->name('eleves.index');
    Route::post('eleves',[EleveController::class,'store'])->name('eleves.store');
    Route::get('eleves/{id}/edit',[EleveController::class, 'edit'])->name('eleves.edit');
    Route::get('eleves/{id}/update',[EleveController::class,'update'])->name('eleves.update');
    Route::put('eleves/{id}/update',[EleveController::class,'update'])->name('eleves.update');
    Route::get('eleves/{id}/delete',[EleveController::class, 'delete'])->name('eleves.delete');

    //Création d'une mouvelle route pour l'ajout d'un nouvel élève
        Route::get('/nouvel_eleve', function () 
        {
            return view('eleves.FormulaireEleve');
        });

// Routes de la note
    Route::get('notes',[NoteController::class,'index'])->name('notes.index');
    Route::post('notes',[NoteController::class,'store'])->name('notes.store');
    Route::get('notes/{id}/edit',[NoteController::class, 'edit'])->name('notes.edit');
    Route::get('notes/{id}/update',[NoteController::class,'update'])->name('notes.update');
    Route::put('notes/{id}/update',[NoteController::class,'update'])->name('notes.update');
    Route::get('notes/{id}/delete',[NoteController::class, 'delete'])->name('notes.delete');

    //Création d'une mouvelle route pour l'ajout d'une nouvelle note
    Route::get('/nouvelle_note', function () 
    {
        return view('notes.FormulaireNote');
    });

// Routes de l'enseignant
    Route::get('/enseignants',[EnseignantController::class,'index'])->name('enseignant.index');
    Route::post('/enseignant',[EnseignantController::class,'store'])->name('enseignant.store');
    Route::get('/enseignant/{id}/edit',[EnseignantController::class, 'edit'])->name('enseignant.edit');
    Route::get('/enseignant/{id}/update',[EnseignantController::class,'update'])->name('enseignant.update');
    Route::put('/enseignant/{id}/update',[EnseignantController::class,'update'])->name('enseignant.update');
    Route::get('enseignant/{id}/delete',[EnseignantController::class, 'delete'])->name('enseignant.delete');


    //Création d'une mouvelle route pour l'inscription
        Route::get('/enseignant_ins', function () {
            return view('enseignants.inscription');
        });