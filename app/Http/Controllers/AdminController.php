<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Log;


use App\User;
use App\Booking;

class AdminController extends Controller
{
    /**
     * Shows admin dashboard
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('admin/dashboard');
    }

    /**
     * Shows all users
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function users()
    {
        $users = User::all();
        return view('admin/users')->with('users', $users);
    }

    /**
     * Shows all bookings
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function bookings()
    {
        $bookings = Booking::all();
        $bookings = $bookings->sortBy('booking_date');
        Log::alert('admin got bookings : ' . $bookings);
        return view('admin/bookings')->with('bookings', $bookings);
    }

    public function bookings_by_date(Request $request)
    {
      $booking_date = $request->get('booking_date');
      $matchThese = ['booking_date' => $booking_date];
      $bookings = Booking::where($matchThese)->get();
      $bookings = $bookings->sortBy('timeslot');
      Log::alert('--- bookings_by_date :: admin got bookings : ' . $bookings);
      return view('admin/bookings')->with('bookings', $bookings);
    }
}
