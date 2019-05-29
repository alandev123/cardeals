<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Interior extends Model
{
    public $fillable = [
        'varient_id',
        'ac',
        'heater',
        'tmeter',
        'clock',
        'easeat',
        'dtd',
        'tameter',
        'lseat',
        'odo',
        'lswheel',       
    ];
}
