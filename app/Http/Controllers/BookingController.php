<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Service;
use App\Booking;
use Illuminate\Support\Facades\Log;


class BookingController extends Controller
{
  /**
   * Shows appontment page
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
      $barbers = User::where('role', 'BARBER')->get();
      $services = Service::all();
      return view('booking')->with('barbers', $barbers)->with('services', $services);
  }

  /**
   * Save booking
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function add_booking(Request $request)
  {

    Log::alert('This is some useful information.');


    $booking_date = $request->get('booking_date');
    $timeslot = $request->get('timeslot');

    $matchThese = ['booking_date' => $booking_date, 'timeslot' => $timeslot];

    $slots = Booking::where($matchThese)->get();

    Log::alert('same bookings in this timeslot: ' . $slots);

    // don't allow multiple bookings in same timeslot 
    if ( count($slots) > 0 ) {
      return view('add_booking')->with('success', 'Booking failed, we are busy at this time !!!');
    }

    $booking = new Booking([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'mobile' => $request->get('mobile'),
                'booking_date' => $request->get('booking_date'),
                'timeslot' => $request->get('timeslot'),
                'barber_id' => $request->get('barber_id'),
                'service_id' => $request->get('service_id'),
                'status' => 0
            ]);
    $booking->save();

    return view('add_booking')->with('success', 'Booking done successfully !!!');
  }

}
