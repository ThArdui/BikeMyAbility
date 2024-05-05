<?php



namespace App\Http\Controllers;

use App\Models\BikeAdd;


class BikeAddController extends Controller
{
    public function checkAndAddBike($_bikeData):\Illuminate\Http\JsonResponse
    {

             BikeAdd::create([
                 'Bike_name' => 'trotinette ',
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

        // Vérifier d'abord si un enregistrement avec le même nom de vélo existe déjà
        $existingBike = BikeAdd::where('Bike_name', $_bikeData['Bike_name'])->first();

        // Si un enregistrement existe déjà avec le même nom de vélo, renvoyer un message approprié
        if ($existingBike) {
            return response()->json(['message' => 'Ce vélo existe déjà dans la base de données']);
        }

        // Sinon, créer un nouvel enregistrement avec les données fournies
        BikeAdd::create($_bikeData);

        // Rediriger l'utilisateur vers une autre page avec un message de confirmation
        return response()->json(['message' => 'Vélo ajouté avec succès']);

    }

}

