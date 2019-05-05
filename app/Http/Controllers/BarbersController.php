<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class BarbersController extends Controller
{
  /**
   * Shows all the services provided by barber shop.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
      //$barbers = User::all();
      $barbers = User::where('role', 'BARBER')->get();
      return view('barbers')->with('barbers', $barbers);
  }
}
