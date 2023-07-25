<?php

use App\Http\Controllers\ProfileController;
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
    // Donne moi une liste de 10 personnes en php utilise les noms africains
    $names = [
        'Awa',
        'Aminata',
        'Aissatou',
        'Aminata',
        'Awa',
        'Aminata',
        'Aissatou',
        'Aminata',
    ];


    return view('welcome',
        [
            'names'=>$names,
            'title'=>'Liste des noms',
            'description'=>'Voici une liste de noms'
        ]
    );
});

Route::get('/profiles',[ProfileController::class,'index'])->name('profile.index');
Route::post('/profile',[ProfileController::class,'store'])->name('profile.store');
Route::get('profile/{id}/delete',[ProfileController::class, 'delete'])->name('profile.delete');
//Route::get('/profile/{id}/update',[ProfileController::class,'update'])->name('profile.update');
Route::get('/profile/{id}/edit',[ProfileController::class, 'edit'])->name('profile.edit');
Route::put('/profile/{id}/update',[ProfileController::class,'update'])->name('profile.update');

