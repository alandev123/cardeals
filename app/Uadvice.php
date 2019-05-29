<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Uadvice extends Model
{
    protected $table='uadvices';
    protected $primarykey='adviceid';
    public $fillable = [
        'userid',
        'budget',
        'transmission',
        'pormi',
        'fuel',
        'build',
        'usage',

    ];
}
