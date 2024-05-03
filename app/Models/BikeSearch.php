<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class BikeSearch extends model
{  protected $table = 'bikes_table';
    protected $fillable = [
        'Bike_name',
        'Use_solo',
        'Use_duo',
        'Use_several',
        'Uselegs',
        'Partial_uselegs',
        'No_legs',
        'V_good_usearms',
        'Good__usearms',
        'Partial_usearms',
        'No_usearms',
        'Saddelok',
        'Partialsaddelok',
        'Seat_needed',
        'Seat_needed_plus',
        'Wheelchair',
        'Md_good',
        'Md_partial',
        'No_md',
        'Pedalok',
        'Partialpedal',
        'Nopedal',
    ];

}
