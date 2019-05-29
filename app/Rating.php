<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    public $fillable=[ 
        'user_id',
        'car_id',
        'rating',
        'comment',
        ];
}
