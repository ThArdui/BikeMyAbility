<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Models\Bike;
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
            $utility = (array) $searchCriteria['utility'];

            if (in_array('solo', $utility)) {
                $bikes->where('Bike_use', 'solo');
                $fieldsUsed = true;
            }
            if (in_array('duo', $utility)) {
                $bikes->orWhere('Bike_use', 'duo');
                $fieldsUsed = true;
            }
            if (in_array('several', $utility)) {
                $bikes->orWhere('Bike_use', 'several');
                $fieldsUsed = true;
            }
        }
        
        // Ajoutez d'autres conditions pour les autres critères

        // Exécutez la requête
        if($fieldsUsed) {
            $results = $bikes->get();
        }
        else{
            $results = collect();
        }
        return view('results-bikes', ['results' => $results]);
    }



}
