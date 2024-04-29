<?php

use Illuminate\Support\Facades\Route;

Route::get('/formserachbike', function ()
{
    return view('searchbike');
});

Route::get('/', function () {
    return view('welcome');
});
