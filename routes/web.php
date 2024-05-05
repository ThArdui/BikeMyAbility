<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\InscriptionController;

use App\Http\Controllers\BikeSearchController;
use App\Http\Controllers\AddBikeToDb;

Route::post('/add-bike-db', [AddBikeToDb::class,'Add_Bike_To_Db'])->name('add-bike-db');
Route::get('/resultatajoutdbb', function ()
{
    return view('resultaddbiketodb');
})->name('resultaddbiketodb');
Route::get('/biketodbform',function (){
    return view('addbiketodbform');
});// route provisoire vers le formualaire qui potentielllement ajouterai uun vélo à la db
Route::get('/rechercher-velos', [BikeSearchController::class, 'bikesearch']);



Route::get('/inscription', [InscriptionController::class, 'showRegistrationForm'])->name('inscription');
Route::post('/inscription', [InscriptionController::class, 'register']);
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

