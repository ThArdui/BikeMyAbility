<?php

namespace App\Http\Controllers;

use App\Models\BikeAdd;
use Illuminate\Http\Request;

class BikeAddController extends Controller
{
    // Vous pourriez nommer cette méthode selon l'action qu'elle effectue, par exemple addBike()
    public function addBike()
    {
        BikeAdd::create([
            'Bike_name' => 'Velo plus',
            'Use_solo' => false,
            'Use_duo' => true,
            'Use_several' => false,
            'Uselegs' => false,
            'Partial_uselegs' => false,
            'No_legs' => true,
            'V_good_usearms' => false,
            'Good__usearms' => false,
            'Partial_usearms' => false,
            'No_usearms' => true,
            'Saddelok' => false,
            'Partialsaddelok' => false,
            'Seat_needed' => false,
            'Seat_needed_plus' => true,
            'Wheelchair' => true,
            'Md_good' => false,
            'Md_partial' => false,
            'No_md' => true,
            'Pedalok' => false,
            'Partialpedal' => false,
            'Nopedal' => true,
            'Picture' => 'resources/pictures/veloplustest.jpg', // exemple : 'resources/pictures/imagetestbike.jpg'
            'Bikeview' => 'veloplustest'// exemple mention vue: bikeeasyrider
        ]);

        // Rediriger l'utilisateur vers une autre page avec un message de confirmation
        return response()->json(['message' => 'Vélo ajouté avec succès']);
    }
}

/*
FONCTION A COPIER POUR AJOUTER UN VELO A LA DB
    public function addBike()
    {
        BikeAdd::create([
            'Bike_name' => '',
            'Use_solo' => true,
            'Use_duo' => false,
            'Use_several' => false,
            'Uselegs' => true,
            'Partial_uselegs' => true,
            'No_legs' => false,
            'V_good_usearms' => true,
            'Good__usearms' => true,
            'Partial_usearms' => false,
            'No_usearms' => false,
            'Saddelok' => true,
            'Partialsaddelok' => true,
            'Seat_needed' => true,
            'Seat_needed_plus' => false,
            'Wheelchair' => false,
            'Md_good' => true,
            'Md_partial' => true,
            'No_md' => true,
            'Pedalok' => true,
            'Partialpedal' => true,
            'Nopedal' => false,
            'Picture' => , // exemple : 'resources/pictures/imagetestbike.jpg'
            'Bikeview' => ''// exemple mention vue: bikeeasyrider
        ]);

        // Rediriger l'utilisateur vers une autre page avec un message de confirmation
        return redirect()->route('bikes.index')->with('success', 'Vélo ajouté avec succès!');
    }
--> une fois fait exécuter route  '/add-bike' en s'assurant que le serveur tourne. sii réussi, message dans la console. Vérifier dans db.
*/
