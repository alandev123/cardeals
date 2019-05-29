<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dimension extends Model
{
    public $fillable=[
        
        'varient_id',
        'length',
        'width',
        'height',
        'wbase',
        'ground',
        'kweight',
        'cvolume',
        'trtype',
        'tsize',
        'seat',
        'door',
    ];
}
