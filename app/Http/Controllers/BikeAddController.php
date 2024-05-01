<?php

namespace App\Http\Controllers;

use App\Models\BikeAdd;

class BikeAddController extends Controller
{
    public function addBike()
    {
             BikeAdd::create([
                 'Bike_name' => 'Easy ride Van Raam',
                 'Use_solo' => true,
                 'Use_duo' => false,
                 'Use_several' =>false ,
                'Uselegs' =>true ,
                 'Partial_uselegs' =>true ,
        'No_legs' =>false ,
        'V_good_usearms' =>true ,
        'Good__usearms' => true,
        'Partial_usearms' => false,
        'No_usearms' => false,
        'Saddelok' => true,
        'Partialsaddelok' => true,
        'Seat_needed' =>true ,
        'Seat_needed_plus' =>false ,
        'Wheelchair' => false,
        'Md_good' => true,
        'Md_partial' => true,
        'No_md' => true,
        'Pedalok' => true,
        'Partialpedal' =>true ,
        'Nopedal' => false,
        'Picture' => 'resources/pictures/imagetestbike.jpg',
        'Bikeview' => 'bikeeasyrider'

        ]);

        // Retourner une réponse réussie
        return response()->json(['message' => 'Vélo ajouté avec succès']);
    }
}
