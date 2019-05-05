<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Service;
use App\Booking;

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
