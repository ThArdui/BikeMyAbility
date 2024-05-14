<?php

//use Database\Seeders\DatabaseSeeder;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\AddBikeToDb;
use App\Http\Controllers\HomeController;

use App\Http\Controllers\BikeSearchController;
use  Illuminate\Database\Eloquent;

//route vers le homepage. Ca devrait etre la route principale je pense.
Route::get('/homepage', [HomeController::class, 'index']);

// route pour vers le formulaire provisoire pour ajouter un vélo à la db:
Route::get('/biketodbform',function (){
    return view('addbiketodbform');
});
// route vers le contrôleur qui gère la recherche de vélos:
Route::get('/rechercher-velos', [BikeSearchController::class, 'bikesearch']);


// route vers contrôleur ajout d'un vélo à la db, va changer?
Route::post('/add-bike-db', [AddBikeToDb::class,'Add_Bike_To_Db'])->name('add-bike-db');
// Route vers page résuLtat ajout d'un vélo à la db
Route::get('/resultaddbiketodb', function ()
{
    return view('resultaddbiketodb');
})->name('resultaddbiketodb');

// routes pour inscription
Route::get('/inscription', [InscriptionController::class, 'showRegistrationForm'])->name('register');
Route::post('/inscription', [InscriptionController::class, 'register']);
Route::post('/checkUserExists', [InscriptionController::class, 'checkUserExists'])->name('checkUserExists');
//Route pour afficher le formulaire de connexion
Route::get('/login', [InscriptionController::class, 'showLoginForm'])->name('login');
Route::post('/login', [InscriptionController::class, 'login']);


Route::get('/', function () {   // route par défaut de laravel
    return view('homepage');
});
// route vers le formulaire de recherche de velo ( pas encore regle christian)
Route::get('/searchbike', [BikeSearchController::class , 'showForm']);
Route::post('/searchbikes', [BikeSearchController:: class, 'searchBikes']);

