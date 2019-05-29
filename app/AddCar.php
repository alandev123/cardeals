<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddCar extends Model
{
  public $fillable = [
    'company_id',
    'carname',
  ];
}
