<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sellcar extends Model
{
    public $fillable = [
        'user_id',
        'image1',
        'image2',
        'image3',
        'make',
        'model',
        'cond',
        'year',
        'km',
        'fuel',
        'state',
        'district',
        'description',
        'price',
        'availability',
    ];
}
