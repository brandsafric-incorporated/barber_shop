<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('admin/bookings')->with('bookings', $bookings);
    }
}
