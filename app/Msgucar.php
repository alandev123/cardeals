<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Msgucar extends Model
{
    public $fillable = [
        'usedcar_id',
        'buyerid',
        'message',
        
      ];
}
