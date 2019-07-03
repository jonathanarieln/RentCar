<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
  protected $fillable = [
      'model',
      'color',
      'year',
      'doors',
      'polarized',
      'armored'
  ];
}
