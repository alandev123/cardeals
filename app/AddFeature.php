<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddFeature extends Model
{
public $fillable=[ 
            'car_id',
            'image',
            'cartype',
            'varient',
            'entype',
            'endes',
            'cc',
            'power',
            'torque',
            'cylinder',
            'valves',
            'dtype',
            'fsupply',
            'trans',
            'gear',
            'clutch',
            'price',
            ];
}
