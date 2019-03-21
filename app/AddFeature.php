<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddFeature extends Model
{
public $fillable=[ 
            'email',
            'car_id',
            'image',
            'cartype',
            'varient',
            'engine',
            'fuel',
            'milage',
            'power',
            'torque',
            'seat',
            'trans',
            'gear',
            'speed',
            'acceleration',
            'fsuspension',
            'rsuspension',
            'frontbrake',
            'rearbrake',
            'tradius',
            'length',
            'width',
            'height',
            'ground',
            'wheelbase',
            'kerb',
            'grossw',
            'cargo',
            'door',
        ];
}
