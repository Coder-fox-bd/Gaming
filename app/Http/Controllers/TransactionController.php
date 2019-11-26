<?php

namespace App\Http\Controllers;

use App\AppUser;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function transactionView(Request $request)
    {
        $User= AppUser::where('user_id',$request->session()->get('loggedUser'))->get();
        return view('User.transaction')
            ->with('users',$User);
    }
}
