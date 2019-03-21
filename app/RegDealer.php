<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegDealer extends Model
{
  public $fillable = [
    'dealername',
    'companyname',
    'state',
    'district',
    'city',
    'email',
    'phone',
    'status',
];
}
