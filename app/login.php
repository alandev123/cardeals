<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class login extends Model
{
  public $fillable = [
  'email',
  'password',
  'utype',
  'remember_token',
  'status',
];
}
