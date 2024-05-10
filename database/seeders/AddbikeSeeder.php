<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use  App\Models\BikeAdd;

class AddbikeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $bikesToAdd =
            [
                [
                    'Bike_name' => 'Easy Rider',
                    'Description' => 'Le Easy Rider est un tricycle confortable conçu pour les adultes, offrant une conduite stable et sûre.',
                    'Pros' => 'Conception ergonomique pour un confort optimal;Stabilité accrue grâce à trois roues;Convient aux personnes de tous âges',
                    'Cons' => 'Peut être encombrant dans les espaces restreints',
                    'Weight' => 39,
                    'Foldable' => false,
                    'Speeds_number' => '7',
                    'Breaks_type' => 'Freins à tambour',
                    'Electric_assistance' => false,

                    'Use_solo' => true,
                    'Use_duo' => false,
                    'Use_several' => false,
                    'Pedal_legs' => true,
                    'Pedal_arms' => false,
                    'Pedal_arms_legs' => true,
                    'no_pedal' => false,
                    'dexterity_good' => true,
                    'dexterity_middel' => false,
                    'no_dexterity' => false,
                    'saddel_ok' => true,
                    'seat_needed' => true,
                    'seat_needed_plus' => false,
                    'wheelchairr' => false,
                    'Picture' => 'pictures/imagetestbike.jpg'
                ]


            ];
        foreach ($bikesToAdd as $bikeData) {
            BikeAdd::create($bikeData);
        }
    }
}
/*
 template champs
   [
        'Bike_name' => '',
        'Description' => '',
        'Pros' => '',
        'Cons' => '',
        'Weight' => '',
        'Foldable' => '',
        'Speeds_number' => '',
        'Breaks_type' => '',
        'Electric_assistance' => '',
        'Use_solo' => '',
        'Use_duo' => '',
        'Use_several' => '',
        'Pedal_legs' => '',
        'Pedal_arms' => '',
        'Pedal_arms_legs' => '',
        'no_pedal' => '',
        'dexterity_good' => '',
        'dexterity_middel' => '',
        'no_dexterity' => '',
        'saddel_ok' => '',
        'seat_needed' => '',
        'seat_needed_plus' => '',
        'wheelchair' => '',
        'Picture' => ''
    ],
 */
