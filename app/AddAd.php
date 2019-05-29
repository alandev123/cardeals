<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddAd extends Model
{
    public $fillable = [
        'companyid',
'model',
'image',
'price',
'tag',
'date',
'bhp',
'milage',
'varient',
'fuel',
'trans',
'status',
    ];
}
