<?php

namespace App\Http\Controllers;

use App\AppUser;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function resultView(Request $request)
    {
        $User= AppUser::where('user_id',$request->session()->get('loggedUser'))->get();
        return view('User.result')
            ->with('users',$User);
    }
}
