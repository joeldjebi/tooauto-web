<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CacheController;

Route::view('/link-app', 'link-app')->name('link-app');

// Route principale pour la page d'accueil
Route::get('/', [HomeController::class, 'homePage'])->name('home');

Route::get('/offres-emploi', [HomeController::class, 'indexOffresEmploi'])->name('offres');
Route::get('/offres/search', [HomeController::class, 'searchOffres'])->name('offres.search');

Route::get('/offres/{id}', [HomeController::class, 'showOffreDetails'])->name('offre.details');

// Route pour afficher le formulaire de candidature
Route::get('/candidature', [HomeController::class, 'showCandidatureForm'])->name('candidature.form');
// Route pour soumettre une candidature
Route::post('/candidature', [HomeController::class, 'storeCandidature'])->name('candidature.store');

// Route pour la page recrutements
Route::get('/recrutements', [HomeController::class, 'recrutements'])->name('recrutements');

// Route pour la page des postes disponibles
Route::get('/postes', [HomeController::class, 'postes'])->name('postes');

// Route pour la page des fonctionnalités
Route::get('/features', [HomeController::class, 'features'])->name('features');

// Route pour la page des modules
Route::get('/modules', [HomeController::class, 'modules'])->name('modules');

// Route pour la page des acteurs
Route::get('/acteurs', [HomeController::class, 'acteurs'])->name('acteurs');

// Route pour la page des partenaires
Route::get('/partners', [HomeController::class, 'partenaires'])->name('partners');

// Route pour la page des témoignages       
Route::get('/testimonials', [HomeController::class, 'testimonials'])->name('testimonials');

// Route pour la page de téléchargement
Route::get('/download', [HomeController::class, 'download'])->name('download');

// Route pour la page de contact
Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

// Route pour la page de FAQ
Route::get('/faq', [HomeController::class, 'faq'])->name('faq');

// Route pour vider tous les caches (protégée par une clé)
Route::get('/clear-caches', [CacheController::class, 'clear'])->name('clear.caches');
