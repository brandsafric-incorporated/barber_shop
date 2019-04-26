<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
  protected $fillable = [
    'title',
    'description',
    'expiry_date',
    'service_id',
    'special_discount',
    'advertisement_photo_path'
  ];


  public function service()
  {
    return $this->belongsTo('App\Service', 'service_id');
  }
  
}
