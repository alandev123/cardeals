<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegCompany extends Model
{
  public $fillable = [
  'email',
  'utype',
  'cin',
  'headoffice',
  'website',
  'year',
  ];
}
