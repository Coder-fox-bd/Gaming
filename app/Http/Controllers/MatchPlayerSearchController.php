<?php

namespace App\Http\Controllers;

use App\AddMatch;
use App\AppAdmin;
use App\AppMatchJoinedPlayer;
use App\AppUser;
use App\AppUserBalance;
use App\GameResult;
use App\RoomPassword;
use App\TotalKill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class MatchPlayerSearchController extends Controller
{
    public function matchPlayerSearchView(Request $request)
    {
        if ($request->match_code){
            $match_date = $request->match_code;
            $match = AddMatch::where('match_code', $match_date)->first();
            if ($match){
                $joined_player = AddMatch::leftjoin('users_joined_in_match','users_joined_in_match.match_id','match.match_id')
                    ->leftjoin('user_info', 'users_joined_in_match.joined_user_id','user_info.user_id')
                    ->where('match.match_id',$match->match_id)->get();
            }else{
                $joined_player = null;
            }
            $Admin= AppAdmin::where('admin_id',$request->session()->get('loggedAdmin'))->get();
            return view('Admin.joined_player')
                ->with('Admin',$Admin)
                ->with('match',$match)
                ->with('joined_player',$joined_player);
        }else{
            $match = 0;
            $joined_player = AddMatch::leftjoin('users_joined_in_match','users_joined_in_match.match_id','match.match_id')
                ->leftjoin('user_info', 'users_joined_in_match.joined_user_id','user_info.user_id')
                ->where('match.match_id',$match)->get();
            $Admin= AppAdmin::where('admin_id',$request->session()->get('loggedAdmin'))->get();
            return view('Admin.joined_player')
                ->with('Admin',$Admin)
                ->with('match',$match)
                ->with('joined_player',$joined_player);

        }
    }

    public function savePassword(Request $request)
    {

        $request->validate([
            'username'=>'required',
            'password'=>'required',
            'match_id'=>'required',
        ]);

        $room = new RoomPassword();

        $room->room_password_match_id=$request->match_id;
        $room->room_username=$request->username;
        $room->room_password=$request->password;
        $room->save();
        $request->session()->flash('message','You successfully give the room username and password');
        return back();

    }

    public function addKillView(Request $request,$id){
        $player_resut = AppUser::leftjoin('users_joined_in_match','users_joined_in_match.joined_user_id','user_info.user_id')
            ->where('user_id',$id)->first();
        $match = AddMatch::where('match_id', $player_resut->match_id)->first();
        $Admin= AppAdmin::where('admin_id',$request->session()->get('loggedAdmin'))->get();
            return view('Admin.add-result')
                ->with('player_resut',$player_resut)
                ->with('match',$match)
                ->with('Admin',$Admin);

    }

    public function addKillSave(Request $request)
    {

        $match_result = new GameResult();

        $match_result->result_user_name=$request->name;
        $match_result->kills=$request->kill;
        $match_result->match_time=$request->match_time;
        $match_result->match_date=$request->match_date;
        $match_result->winner=$request->winner;
        $match_result->result_match_id=$request->match_id;

        if ($match_result->save()){
            $match = AddMatch::where('match_id', $request->match_id)->first();
            $pre_balance = AppUserBalance::where('balance_user_id',$request->joined_user_id)->first();
            $Balance = AppUserBalance::find($pre_balance->balance_id);
            $new_balance = $pre_balance->balance_amount+($match->per_kill*$request->kill);
            $Balance->balance_amount=$new_balance;

            if ($Balance->save()){
                $total_kill = TotalKill::where('user_id_of_kill',$request->joined_user_id)->first();
                if ($total_kill){
                    $Kills = TotalKill::find($total_kill->total_kill_id);

                    $new_kill = $total_kill->kills+$request->kill;
                    $total_match_played = $total_kill->total_match+1;

                    $Kills->kills=$new_kill;
                    $Kills->total_match=$total_match_played;
                    $Kills->save();
                    AppMatchJoinedPlayer::where('users_joined_in_match_id', $request->users_joined_in_match_id)->delete();
                    $request->session()->flash('message', 'Data inserted successfully');
                    $url = $request->url;
                    return redirect($url);
                }else{
                    $Kills = new TotalKill();

                    $Kills->user_id_of_kill=$request->joined_user_id;
                    $Kills->kills=$request->kill;
                    $Kills->total_match=1;
                    $Kills->save();
                    AppMatchJoinedPlayer::where('users_joined_in_match_id', $request->users_joined_in_match_id)->delete();
                    $request->session()->flash('message', 'Data inserted successfully');
                    $url = $request->url;
                    return redirect($url);
                }
            }
        }

    }
}
