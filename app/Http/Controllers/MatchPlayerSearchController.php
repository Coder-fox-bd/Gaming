<?php

namespace App\Http\Controllers;

use App\AddMatch;
use App\AppAdmin;
use App\AppMatchJoinedPlayer;
use App\AppUser;
use App\RoomPassword;
use Illuminate\Http\Request;

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

    public function addKill(Request $request)
    {
        $request->validate([
            'name'=> 'required',
            'kill'=> 'required',
            'match_time'=> 'required',
            'match_date'=> 'required',
            'match_id'=> 'required',
            'joined_user_id'=> 'required',
        ]);
        $join_delete = AppMatchJoinedPlayer::where('joined_user_id', $request->joined_user_id)->first();
        dd($join_delete);
    }
}
