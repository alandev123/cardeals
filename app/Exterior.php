<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exterior extends Model
{
    public $fillable = [
        'varient_id',
        'ahlamp',
        'ffog',
        'rfog',
        'rww',
        'awheel',
        'sroof',
        'rrail',
        'orvm',
        'rsw',
        'rwash',
        'wcover',
        'spoiler',
        'carrier',
        'rmi',
        'cgrill',
    ];
}
