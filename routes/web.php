<?php

//use Database\Seeders\DatabaseSeeder;
use App\Http\Controllers\BikeSearchController;
use App\Http\Controllers\HomeControllers;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\old\AddBikeToDb;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

use  Illuminate\Database\Eloquent;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\BikeController;

// route pour vers le formulaire provisoire pour ajouter un vélo à la db:
//

//route vers le homepage. Ca devrait etre la route principale je pense.
Route::get('/', [HomeControllers::class, 'index'])->name('home');

    Route::get('/biketodbform',function (){
        return view('addbiketodbform');
})->name('biketodbform');

// route vers le contrôleur qui gère la recherche de vélos:
Route::get('/rechercher-velos', [BikeSearchController::class, 'SearchBikes']);
//Route bikesearch:
Route::get('/bikesearch',function ()
{
    return view('bikesearch');
})->name('bikesearch');

// route vers contrôleur ajout d'un vélo à la db:
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
Route::get('signout', [InscriptionController::class, 'signout'])->name('signout');
//routes pour le formulaire de contact:
Route::post('/contact', [ContactController::class, 'sendMessage'])->name('contact');
Route::get('/contact', function () {
    return view('contact');
})->name('contact_form');
//route vers la gallerie:
Route::get('/gallerie-des-velos', [BikeController::class, 'index'])->name('gallerie.velos');
//route vers les details du velo:
Route::get('/details-velo/{bike}', [BikeController::class, 'show'])->name('details.velo');

/*
Route::get('/', function () {   // route par défaut de laravel
    return view('bienvenu');
})->name('home');*/
// route vers table bike encore utile?
route::get('/bikes',function (){
    $bikes=DB::table('bikes')->get();
    return view('index',['bikes'=>$bikes]);
});
// route vers le formulaire de recherche de velo ( pas encore regle christian)
/*
Route::get('/searchbike', [BikeSearchController::class , 'showForm']);
Route::post('/searchbikes', [BikeSearchController:: class, 'searchBikes']);
*/

