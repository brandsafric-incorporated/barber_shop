<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Service;

class ServicesController extends Controller
{
    /**
     * Shows all the services provided by barber shop.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $services = Service::all();
        return view('services')->with('services', $services);
    }
}
