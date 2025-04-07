<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\etudiants;

Route::get('/', function () {
    return view('welcome');
});

// Route qui redirige vers la page pour ajouter un nouvel étudiant
Route::get('/etudiant', [EtudiantController::class, 'ajouterEtudiant']);

// Route qui ajoute un étudiant à la base de données après le clique sur submit
Route::post('/ajoutetu', [EtudiantController::class, 'ajout']);

// Route pour afficher le formulaire de modification des informations d'un étudiant
Route::get('/modifier/{id}', [EtudiantController::class, 'modifier']);

// Route pour modifier les informations de l'étudiant
Route::post('/miseajour', [EtudiantController::class, 'update']);

// Route pour la suppression d'un étudiant
Route::get('/supprimer/{id}', [EtudiantController::class, 'supprimer']);

Route::get('/dashboard', function () {
    $etudiants = etudiants::all();
    return view('dashboard', compact('etudiants'));
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
