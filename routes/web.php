<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\BikeAddController;

use App\Http\Controllers\BikeSearchController;
// route pour ajouter un velo comme utilisateur
Route::get('/biketodbform',function (){
    return view('addbiketodbform');
});// route provisoire vers le formualaire qui potentielllement ajouterai uun vélo à la db
// route dd resultat de recherche de velo ok
Route::get('/rechercher-velos', [BikeSearchController::class, 'bikesearch']);// yes
// Route::put('/update-record/{id}', [BikeAddController::class, 'updateRecord']);
//Route::get('/add-bike', [BikeAddController::class, 'addBike'])->name('bikes.add');
// route pour s inscrire get et post ok
Route::get('/inscription', [InscriptionController::class, 'showRegistrationForm'])->name('inscription');
Route::post('/inscription', [InscriptionController::class, 'register']);
// route de recherche de velo ok
Route::get('/bikesearch', function () {
    return view('bikesearch');
})->name('bikesearch');


Route::get('/recherchevelos', function ()
{
    return view('bikesearch');
});

Route::get('/', function () {
    return view('welcome');
});
// route vers table bike
route::get('/bikes',function (){
    $bikes=DB::table('bikes')->get();
    return view('index',['bikes'=>$bikes]);
});

