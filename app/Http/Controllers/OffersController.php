<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Service;


class OffersController extends Controller
{
  /**
   * Shows offers page
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */
  public function index()
  {
      $offers = Service::all();
      return view('offers')->with('offers', $offers);
  }
}
