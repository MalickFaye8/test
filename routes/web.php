<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminControler;
use App\Http\Controllers\VoitureController;
use App\Http\Controllers\EntretienController;
use App\Http\Controllers\AffectationController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChauffeurController;

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
    return view('auth.login');
});

Route::get('/registers', function () {
    return view('auth.register');
});

Route::controller(AdminControler::class)->group(function (){
    Route::get('/admin/logout','destroy')->name('admin.logout');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/voiture_liste', [VoitureController::class, 'index'])->name('list_voiture');
Route::get('/voiture_create', [VoitureController::class, 'create'])->name('create_voiture');
Route::post('/voiture_store', [VoitureController::class, 'store'])->name('store_voiture');
Route::get('/voitures/detail/{id}', [VoitureController::class, 'show']);
Route::get('/voitures/edit/{id}', [VoitureController::class, 'edit'])->name('voitures.edit');
Route::put('/voitures/update/{id}', [VoitureController::class, 'update']);
Route::delete('/voitures/delete/{id}', [VoitureController::class, 'destroy']);

Route::get('/entretien_liste', [EntretienController::class, 'index'])->name('entretien_liste');
Route::get('/entretien_creer', [EntretienController::class, 'create']);

Route::get('/affectaion_vehicules', [AffectationController::class, 'index']);


Route::get('/chauffeur_create', [ChauffeurController::class, 'create']);
Route::post('/store_chauffeur', [ChauffeurController::class, 'store'])->name('store_chauffeur');
Route::get('/chauffeur_liste', [ChauffeurController::class, 'index']);
Route::get('/chauffeur/edit/{id}', [ChauffeurController::class, 'edit']);
Route::put('/chauffeur/update/{id}', [ChauffeurController::class, 'update']);
Route::delete('/chauffeur/delete/{id}', [ChauffeurController::class, 'destroy']);


require __DIR__.'/auth.php';
