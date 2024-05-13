<?php

namespace App\Http\Controllers;

use App\Models\Bikes;
use App\Models\BikeSearch;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;

class BikeSearchController extends controller
{
    // BikeSearchController.php
    public function SearchBikes(Request $request)
    {
        $keyBike = $request->input('physique'); // Remplacez 'keyword' par le nom du champ de recherche dans votre formulaire
        $results = Bikes::where('name', "description")->get(); // Remplacez 'name' par le nom de la colonne dans votre table

        return view('results-bikes', ['results' => $results]);
    }

    public function ShowForm()
    {
        return view('bikesearch'); // Remplacez par le nom de votre vue de formulaire
    }

}
