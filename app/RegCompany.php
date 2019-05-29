<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegCompany extends Model
{
  public $fillable = [
  'email',
  'cin',
  'headoffice',
  'website',
  'year',
  ];
}
