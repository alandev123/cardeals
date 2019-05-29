<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suspension extends Model
{
    public $fillable=[
        'varient_id',
        'fsus',
        'rsus',
        'shock',
        'steert',
        'steerc',
        'tradius',
    ];
}
