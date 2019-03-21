<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FirstReg extends Model
{
  public $fillable = [
  'name', 
  'state',
  'district',
  'city',
  'utype',
  'email',
  'phone',
  'status',
];
}
