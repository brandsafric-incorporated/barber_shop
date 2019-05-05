<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Service;

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
}
