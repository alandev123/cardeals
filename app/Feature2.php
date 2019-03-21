<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature2 extends Model
{
    public $fillable=[
        'car_id',
        'em',
        'tid',
        'abs',
        'pos',
        'pow',
        'ac',
        'rac',
        'msteer',
        'cruise',
        'rps',
        'tsn',
    ];
}
