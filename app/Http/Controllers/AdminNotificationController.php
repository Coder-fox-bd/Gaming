<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminNotificationController extends Controller
{
    public function notificationView(){
        return view('Admin.notification');
    }
}
