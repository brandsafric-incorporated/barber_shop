<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OffersController extends Controller
{
  /**
   * Shows offers page
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
      return view('offers');
  }
}
