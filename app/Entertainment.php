<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Entertainment extends Model
{
    public $fillable = [
        'varient_id',
        'cd',
        'radio',
        'speaker',
        'usb',
        'bt',
        'rspeaker',
    ];
}
