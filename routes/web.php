<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\InscriptionController;

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

