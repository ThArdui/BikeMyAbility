<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    use HasFactory;

    //protected $table = 'bikes';

    protected $fillable = [
        'Bike_name',
        'Description',
        'Pros',
        'Cons',
        'Weight',
        'Electrical_assistance',
        'Foldable',
        'Speeds_number',
        'Brakes_type',
        'Frame_height',
        'Disability_type',
        'Bike_use',
        'Pedal_way',
        'Dexterity_arms',
        'Balance',
        'Picture',


    ];
}
