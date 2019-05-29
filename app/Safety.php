<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Safety extends Model
{
    public $fillable = [
        'varient_id',
        'abs',
        'ebd',
        'cenlock',
        'psense',
        'adlock',
        'bassist',
        'cslock',
        'pabag',
        'rsabag',
        'dabag',
        'fsabag',
        'dnrvm',
        'sbwarn',
        'adseat',
        'dawarn',
        'klentry',
        'scsys',
        'hass',
        'rcam',
        'atdev',
        'adu',
        'pdl',
        'alarm',
        'tctrl',
        'ei',
        'ecwarn',
        'fhlamp',
    ];
}
