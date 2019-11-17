<?php

namespace App\Http\Controllers;

use App\AppUser;
use App\AppUserBalance;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profileView(Request $request)
    {
        $User= AppUser::where('user_id',$request->session()->get('loggedUser'))->first();
        $balance = AppUserBalance::where('balance_user_id',$User->user_id)->first();
        return view('User.profile')
            ->with('users',$User)
            ->with('balance',$balance);
    }
}
