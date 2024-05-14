<?php

namespace App\Http\Controllers;


use App\Models\Bike;
use Illuminate\Http\Request;
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

        $fieldsUsed = false;

        $searchCriteria = $request->all();

        //dd($searchCriteria["utility[0]"]);

        $bikes = Bike::query();

        if (isset($searchCriteria['utility'])) {
            if (in_array('solo', $searchCriteria['utility'])) {
                $bikes->where('Bike_use', 'solo');
            }
            if (in_array('duo', $searchCriteria['utility'])) {
                $bikes->orWhere('Bike_use', 'duo');
            }
            if (in_array('several', $searchCriteria['utility'])) {
                $bikes->orWhere('Bike_use', 'several');
            }
            $fieldsUsed = true;
        }
        // Ajoutez d'autres conditions pour les autres critères

        // Exécutez la requête
        if($fieldsUsed) {
            $results = $bikes->get();
        }
        else{
            $results = collect();
        }
        // Passez les résultats à la vue
        $keyBike = $request->input('physique'); // Remplacez 'keyword' par le nom du champ de recherche dans votre formulaire
        $results = Bikes::where('name', "description")->get(); // Remplacez 'name' par le nom de la colonne dans votre table
        return view('results-bikes', ['results' => $results]);
    }



}
