<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
  /**
   * Shows appontment page
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
      return view('booking');
  }
}
