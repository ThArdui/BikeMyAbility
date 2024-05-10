<?php

//use Database\Seeders\DatabaseSeeder;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\AddBikeToDb;

use App\Http\Controllers\BikeSearchController;
// route pour vers le formulaire provisoire pour ajouter un vélo à la db:
Route::get('/biketodbform',function (){
    return view('addbiketodbform');
});
// route vers le contrôleur qui gère la reecherche de vélos, va changer??
Route::post('/rechercher-velos', [BikeSearchController::class, 'bikesearch']);// yes


// route vers contrôleur ajout d'un vélo à la db, va changer?
Route::post('/add-bike-db', [AddBikeToDb::class,'Add_Bike_To_Db'])->name('add-bike-db');
// Route vers page résuLtat ajout d'un vélo à la db
Route::get('/resultaddbiketodb', function ()
{
    return view('resultaddbiketodb');
})->name('resultaddbiketodb');


// route contrôleur rechherche vélo va changer?
Route::post('/rechercher-velos', [BikeSearchController::class, 'bikesearch']);
// routes pour inscription
Route::get('/inscription', [InscriptionController::class, 'showRegistrationForm'])->name('register');
Route::post('/inscription', [InscriptionController::class, 'register']);
Route::post('/checkUserExists', [InscriptionController::class, 'checkUserExists'])->name('checkUserExists');
//Route pour afficher le formulaire de connexion
Route::get('/login', [InscriptionController::class, 'showLoginForm'])->name('login');
Route::post('/login', [InscriptionController::class, 'login']);

// route vers le formulaire de recherche de velo ok
Route::get('/bikesearch', function () {
    return view('bikesearch');
})->name('bikesearch');
Route::get('/', function () {   // route par défaut de laravel
    return view('welcome');
});
// route vers table bike encore utile?
route::get('/bikes',function (){
    $bikes=DB::table('bikes')->get();
    return view('index',['bikes'=>$bikes]);
});

// test christian
route::get('/resultats-velos',[BikeSearchController::class, 'bikesearch'])->name('bikeSearch');

