<?php

namespace App\Http\Controllers;

use App\AdminInbox;
use App\AppUser;
use App\AppUserBalance;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    public function transactionView(Request $request)
    {
        $User= AppUser::where('user_id',$request->session()->get('loggedUser'))->first();
        $balance = AppUserBalance::where('balance_user_id',$User->user_id)->first();
        return view('User.transaction')
            ->with('users',$User)
            ->with('balance',$balance);

    }

    public function withDraw(Request $request)
    {
        $User= AppUser::where('user_id',$request->session()->get('loggedUser'))->first();
        $balance = AppUserBalance::where('balance_user_id',$User->user_id)->first();
        if ($balance->balance_amount>$request->amount_withdraw){
            $withdraw = new AdminInbox();
            $subject = 'withdraw';
            $status = 1;

            $withdraw->user_id=$User->user_id;
            $withdraw->admin_inbox_subject=$subject;
            $withdraw->payment_number=$request->mobile_number;
            $withdraw->amount=$request->amount_withdraw;
            $withdraw->account_type=$request->withdow_method;
            $withdraw->status=$status;

            if ($withdraw->save()){
                $up_balance = AppUserBalance::find($User->user_id);
                $new_balance = $up_balance->balance_amount-$request->amount_withdraw;
                $up_balance->balance_amount=$new_balance;
                $up_balance->save();
                $request->session()->flash('message','Your withdraw request has been submitted!');
                return back();
            }
        }else{
            $request->session()->flash('message2','You have insufficient balance!');
            return back();
        }

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
        $account_type = 'bkash';
        $status = 1;

        $add_money_request->user_id= $User->user_id;
        $add_money_request->admin_inbox_subject=$subject;
        $add_money_request->payment_number=$request->bkash;
        $add_money_request->amount=$request->amount_to_add;
        $add_money_request->account_type=$account_type;
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
        $account_type = 'rocket';
        $status = 1;

        $add_money_request->user_id= $User->user_id;
        $add_money_request->admin_inbox_subject=$subject;
        $add_money_request->payment_number=$request->rocket;
        $add_money_request->amount=$request->amount_to_add;
        $add_money_request->account_type=$account_type;;
        $add_money_request->status=$status;
        $add_money_request->save();
        $request->session()->flash('message','Your request has been submitted!');
        return back();

    }
}
