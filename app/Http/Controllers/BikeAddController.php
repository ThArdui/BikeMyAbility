<?php



namespace App\Http\Controllers;

use App\Models\BikeAdd;


class BikeAddController extends Controller
{
    public function checkAndAddBike($_bikeData):\Illuminate\Http\JsonResponse
    {
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

