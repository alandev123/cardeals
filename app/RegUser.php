<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegUser extends Model
{
  public $fillable = [
'name',
'state',
'district',
'age',
'gender',
'email',
'phone',
'status',
];
}
