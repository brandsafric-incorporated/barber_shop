<?php

namespace Tests\Feature;

use App\Booking;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class BookingTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testBookingCreation()
    {

      print "\n[BookingTest] :: checking link for home page";

      $booking_date = '2019-5-25';
      $timeslot = 9;

      factory('App\Booking')->create([
          'booking_date' => $booking_date,
          'timeslot' => $timeslot,
      ]);

      print "\n[BookingTest] :: asserting that booking on - '" . $booking_date . "' exists.";
      $this->assertDatabaseHas('bookings', [
          'booking_date' => $booking_date,
          'timeslot' => $timeslot
      ]);
    }
}
