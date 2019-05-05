<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
  protected $table = 'bookings';

  protected $fillable = [
    'name',
    'email',
    'mobile',
    'barber_id',
    'service_id',
    'booking_date',
    'timeslot',
    'status'
  ];

  public function user()
    {
        return $this->belongsTo('App\User');
    }

}
