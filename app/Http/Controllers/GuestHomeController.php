<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestHomeController extends Controller
{
    public function guestView()
    {
        return view('home.guest-home');
    }
}
