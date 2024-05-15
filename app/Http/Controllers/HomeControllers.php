<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class HomeControllers extends controller
{
    public function index()
    {
        return view('homepage');
    }
}
