<?php

namespace App\Http\Controllers;

use App\AppUser;
use App\AppUserBalance;
use App\TotalEarn;
use App\TotalKill;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profileView(Request $request)
    {
        $User= AppUser::where('user_id',$request->session()->get('loggedUser'))->first();
        $balance = AppUserBalance::where('balance_user_id',$User->user_id)->first();
        $kills = TotalKill::where('user_id_of_kill',$User->user_id)->first();
        $earns = TotalEarn::where('player_id',$User->user_id)->first();
        return view('User.profile')
            ->with('users',$User)
            ->with('kills',$kills)
            ->with('earns',$earns)
            ->with('balance',$balance);
    }
}
