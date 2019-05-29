<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Performance extends Model
{
    public $fillable=[ 
        'varient_id',
        'speed',
        'acce',
        'braking',
        'milage',
        'fuel',
        'tcapacity',
        ];
}
