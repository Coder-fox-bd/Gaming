<?php

namespace App\Http\Controllers;

use App\AddGame;
use App\AddMatch;
use App\AppMatchJoinedPlayer;
use App\AppUser;
use App\AppUserBalance;
use Illuminate\Http\Request;

class SubmitJoiningReqController extends Controller
{
    public function joinView(Request $request,$id)
    {
        $Match=AddMatch::where('match_id', $id)->first();
        $datas = AddGame::where('game_id',$Match->match_game_id)->first();
        $User= AppUser::where('user_id',$request->session()->get('loggedUser'))->get();
        return view('User.submit-joining')
            ->with('users',$User)
            ->with('Match',$Match)
            ->with('datas',$datas);
    }
    public function saveJoinReq(Request $request,$id)
    {
        $User= AppUser::where('user_id',$request->session()->get('loggedUser'))->first();

        $CountUser = AppMatchJoinedPlayer::where('match_id', $request->match_id)->count();

        if ($CountUser==100){
            $request->session()->flash('message2','The Room is full ! Please Join next match');
            return back();
        }else{
            $Match=AddMatch::where('match_id', $request->match_id)->first();
            $pre_balance = AppUserBalance::where('balance_user_id',$User->user_id)->first();
            $Balance = AppUserBalance::find($pre_balance->balance_id);
            $new_balance = $pre_balance->balance_amount-$Match->entry_fee;

            $request->validate([
                'game_user_name'=>'required',
                'confirm_username'=>'required|same:game_user_name',
                'match_id'=>'required',
            ]);

            if ($pre_balance->balance_amount<$Match->entry_fee){
                $request->session()->flash('message2','You have insufficient Balance');
                return back();
            }else{
                $JoinMatch = new AppMatchJoinedPlayer();

                $JoinMatch->joined_user_id=$User->user_id;
                $JoinMatch->match_id=$request->match_id;
                $JoinMatch->game_user_name=$request->game_user_name;
                if ($JoinMatch->save()){
                    $Balance->balance_amount=$new_balance;
                    $Balance->save();
                    $request->session()->flash('message','You joined the match successfully');
                    return back();
                }
            }

        }

    }
}
