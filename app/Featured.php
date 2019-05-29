<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Featured extends Model
{
     public $fillable=[

        'make',
        'model',
        'image',
        
    ];
}
