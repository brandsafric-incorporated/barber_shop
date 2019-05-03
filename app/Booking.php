<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
  protected $table = 'bookings';

  protected $fillable = [
    'user_id',
    'service_id',
    'start_dt',
    'status'
  ];

  public function user()
    {
        return $this->belongsTo('App\User');
    }

}
