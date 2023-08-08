<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CoursController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\UserController;


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
    Route::get('/nouveau_cours',[CoursController::class,'inscription']);

    //Création d'une nouvelle route pour l'ajout d'un nouveau cours
    // Route::get('/nouveau_cours', function () {
    //     return view('cours.FormulaireCours');
    // });

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
    Route::get('/nouvelle_note',
    [
        NoteController::class, 'inscription'
    ]);

// Routes de l'enseignant
    Route::get('/enseignants',[EnseignantController::class,'index'])->name('enseignant.index');
    Route::post('/enseignant',[EnseignantController::class,'store'])->name('enseignant.store');
    Route::get('/enseignant/{id}/edit',[EnseignantController::class, 'edit'])->name('enseignant.edit');
    Route::get('/enseignant/{id}/update',[EnseignantController::class,'update'])->name('enseignant.update');
    Route::put('/enseignant/{id}/update',[EnseignantController::class,'update'])->name('enseignant.update');
    Route::get('enseignant/{id}/delete',[EnseignantController::class, 'delete'])->name('enseignant.delete');


    //Création d'une mouvelle route pour l'ajout d'un nouvel enseignant
        Route::get('/enseignant_ins', function () {
            return view('enseignants.inscription');
        });
 
// Route pour le login
    // Route::get('/', function () {
    //     return view('login');
    // })->name('login');

// Route de la page d'accueil
    // Route::get('/accueil', function () {
    // return view('welcome');
    // })->name('accueil');





// Routes de la Matiere
    Route::get('/matiere_ins', function () {
        return view('matieres.inscription');
    });
    Route::get('/matieres',[MatiereController::class,'index'])->name('matiere.index');
    Route::post('/matiere',[MatiereController::class,'store'])->name('matiere.store');
    Route::get('/matiere/{id}/edit',[MatiereController::class, 'edit'])->name('matiere.edit');
    Route::get('/matiere/{id}/update',[MatiereController::class,'update'])->name('matiere.update');
    Route::put('/matiere/{id}/update',[MatiereController::class,'update'])->name('matiere.update');
    Route::get('matiere/{id}/delete',[MatiereController::class, 'delete'])->name('matiere.delete');

    Route::get('/matiere_ins',[MatiereController::class,'inscription']);


// Routes de la classe
    Route::get('/classe_ins', function () {
        return view('classes.inscription');
    });
    Route::get('/classes',[ClasseController::class,'index'])->name('classe.index');
    Route::post('/classe',[ClasseController::class,'store'])->name('classe.store');
    Route::get('/classe/{id}/edit',[ClasseController::class, 'edit'])->name('classe.edit');
    Route::get('/classe/{id}/update',[ClasseController::class,'update'])->name('classe.update');
    Route::put('/classe/{id}/update',[ClasseController::class,'update'])->name('classe.update');
    Route::get('classe/{id}/delete',[ClasseController::class, 'delete'])->name('classe.delete');

// Routes de l'inscription
    Route::get('/inscription_ins',[InscriptionController::class,'inscription']);

    Route::get('/inscriptions',[InscriptionController::class,'index'])->name('inscription.index');
    Route::post('/inscription',[InscriptionController::class,'store'])->name('inscription.store');
    Route::get('/inscription/{id}/edit',[InscriptionController::class, 'edit'])->name('inscription.edit');
    Route::get('/inscription/{id}/update',[InscriptionController::class,'update'])->name('inscription.update');
    Route::put('/inscription/{id}/update',[InscriptionController::class,'update'])->name('inscription.update');
    Route::get('inscription/{id}/delete',[InscriptionController::class, 'delete'])->name('inscription.delete');
    //test
    Route::get('/test',[InscriptionController::class,'getNameById'])->name('inscription.test');

// Routes de l'utilisateur
    Route::get('/user_ins', function () {
        return view('users.inscription');
    });
    Route::get('/users',[UserController::class,'index'])->name('user.index');
    Route::post('/user',[UserController::class,'store'])->name('user.store');
    Route::get('/user/{id}/edit',[UserController::class, 'edit'])->name('user.edit');
    Route::get('/user/{id}/update',[UserController::class,'update'])->name('user.update');
    Route::put('/user/{id}/update',[UserController::class,'update'])->name('user.update');
    Route::get('user/{id}/delete',[UserController::class, 'delete'])->name('user.delete');
