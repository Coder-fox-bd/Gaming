<?php

namespace App\Http\Controllers;

use App\AdminInbox;
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

    public function addMoneyView(Request $request)
    {
    $User= AppUser::where('user_id',$request->session()->get('loggedUser'))->get();
    return view('User.bKash_add')
        ->with('users',$User);
    }

    public function addMoney(Request $request)
    {
        $User= AppUser::where('user_id',$request->session()->get('loggedUser'))->first();

        $add_money_request = new AdminInbox();

        $request->validate([
            'amount_to_add'=>'required',
            'bkash'=>'required',
        ]);

        $subject = 'add';
        $status = 1;

        $add_money_request->user_id= $User->user_id;
        $add_money_request->admin_inbox_subject=$subject;
        $add_money_request->payment_number=$request->bkash;
        $add_money_request->amount=$request->amount_to_add;
        $add_money_request->status=$status;
        $add_money_request->save();
        $request->session()->flash('message','Your request has been submitted!');
        return back();

    }

    public function addRocketMoneyView(Request $request)
    {
        $User= AppUser::where('user_id',$request->session()->get('loggedUser'))->get();
        return view('User.rocket_add')
            ->with('users',$User);
    }

    public function addRocketMoney(Request $request)
    {
        $User= AppUser::where('user_id',$request->session()->get('loggedUser'))->first();

        $add_money_request = new AdminInbox();

        $request->validate([
            'amount_to_add'=>'required',
            'rocket'=>'required',
        ]);

        $subject = 'add';
        $status = 1;

        $add_money_request->user_id= $User->user_id;
        $add_money_request->admin_inbox_subject=$subject;
        $add_money_request->payment_number=$request->rocket;
        $add_money_request->amount=$request->amount_to_add;
        $add_money_request->status=$status;
        $add_money_request->save();
        $request->session()->flash('message','Your request has been submitted!');
        return back();

    }
}
