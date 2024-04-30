<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;


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

