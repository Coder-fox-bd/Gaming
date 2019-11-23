<?php

namespace App\Http\Controllers;

use App\AppUser;
use App\GameResult;
use App\StoreMatch;
use Illuminate\Http\Request;

class ResultController extends Controller
{
    public function resultView(Request $request)
    {
        $matchs = StoreMatch::take(3)->get();
        $User= AppUser::where('user_id',$request->session()->get('loggedUser'))->get();
        return view('User.result')
            ->with('matchs',$matchs)
            ->with('users',$User);
    }

    public function searchResult(Request $request)
    {
        if ($request->ajax()) {
            $output = "";
            $searched = $request->search;
            $data = StoreMatch::where('store_match_id', $searched)->first();
            $results = GameResult::where('result_match_id', $searched)->get();
            if ($data) {
                $output .= '<div class="row">' .
                    '<div class="col-12 pt-3 text-center bg-white">' .
                    '<h6><strong>Match Organized on</strong></h6>' .
                    '<p>' . $data->match_date . ' at ' . $data->match_time . '</p>' .
                    '</div>' .
                    '</div>' .
                    '<div class="row mt-3 pt-3 pb-3 bg-white">' .
                    '<div class="col-4 p-0 text-center">' .
                    '<p>Win Prize</p>' .
                    '<strong>' . $data->win_prize . '</strong>' .
                    '</div>' .
                    '<div class="col-4 p-0 text-center">' .
                    '<p>Per Kill</p>' .
                    '<strong>' . $data->per_kill . '</strong>' .
                    '</div>' .
                    '<div class="col-4 p-0 text-center">' .
                    '<p>Entry Fee</p>' .
                    '<strong>' . $data->entry_fee . '</strong>' .
                    '</div>' .
                    '</div>' .
                    '<div class="row mt-3 bg-yellow">' .
                    '<div class="col-12 pt-1 pb-1 text-center">' .
                    '<strong>WINNER OF THE MATCH</strong>' .
                    '</div>' .
                    '</div>';
                $output .= '<div class="row mt-2">' .
                    '<div class="col-12 p-0 mt-2">' .
                    '<table class="table table-light text-center">' .
                    '<thead class="thead-dark border-0">' .
                    '<tr>' .
                    '<th scope="col">#</th>' .
                    '<th scope="col">Player Name</th>' .
                    '<th scope="col">Kills</th>' .
                    '</tr>' .
                    '</thead>' .
                    '<tbody>';
                $i = 0;
                foreach ($results as $result){
                    $i++;
                    if ($result->winner==1){
                        $output .= '<tr>' .
                            '<th scope="row">'.$i.'</th>' .
                            '<td>'.$result->player_one_username.'</td>' .
                            '<td>'.$result->player_one_kill.'</td>' .
                            '</tr>';
                    }
                }
                $output .= '</tbody>' .
                    '</table>' .
                    '</div>' .
                    '</div>';
                $output .= '<div class="row mt-2 bg-yellow">' .
                    '<div class="col-12 pt-1 pb-1 text-center">' .
                    '<strong>FULL RESULT</strong>' .
                    '</div>' .
                    '</div>' .
                    '<div class="row mt-2">' .
                    '<div class="col-12 p-0 mt-2">' .
                    '<table class="table table-light text-center">' .
                    '<thead class="thead-dark border-0">' .
                    '<tr>' .
                    '<th scope="col">#</th>' .
                    '<th scope="col">Player Name</th>' .
                    '<th scope="col">Kills</th>' .
                    '</tr>' .
                    '</thead>' .
                    '<tbody>';

                $i = 0;
                foreach ($results as $result){
                    $i++;
                    if ($result->player_one_username && $result->player_two_username && $result->player_three_username && $result->player_four_username){
                        $output .= '<tr>' .
                            '<th scope="row">'.$i.'</th>' .
                            '<td>'.$result->player_one_username.'</td>' .
                            '<td>'.$result->player_one_kill.'</td>' .
                            '</tr>';
                        $output .= '<tr>' .
                            '<th scope="row"></th>' .
                            '<td>'.$result->player_two_username.'</td>' .
                            '<td>'.$result->player_two_kill.'</td>' .
                            '</tr>';
                        $output .= '<tr>' .
                            '<th scope="row"></th>' .
                            '<td>'.$result->player_three_username.'</td>' .
                            '<td>'.$result->player_three_kill.'</td>' .
                            '</tr>';
                        $output .= '<tr>' .
                            '<th scope="row"></th>' .
                            '<td>'.$result->player_four_username.'</td>' .
                            '<td>'.$result->player_four_kill.'</td>' .
                            '</tr>';
                    }elseif ($result->player_one_username && $result->player_two_username && $result->player_three_username){
                        $output .= '<tr>' .
                            '<th scope="row">'.$i.'</th>' .
                            '<td>'.$result->player_one_username.'</td>' .
                            '<td>'.$result->player_one_kill.'</td>' .
                            '</tr>';
                        $output .= '<tr>' .
                            '<th scope="row"></th>' .
                            '<td>'.$result->player_two_username.'</td>' .
                            '<td>'.$result->player_two_kill.'</td>' .
                            '</tr>';
                        $output .= '<tr>' .
                            '<th scope="row"></th>' .
                            '<td>'.$result->player_three_username.'</td>' .
                            '<td>'.$result->player_three_kill.'</td>' .
                            '</tr>';
                    }elseif ($result->player_one_username && $result->player_two_username){
                        $output .= '<tr>' .
                            '<th scope="row">'.$i.'</th>' .
                            '<td>'.$result->player_one_username.'</td>' .
                            '<td>'.$result->player_one_kill.'</td>' .
                            '</tr>';
                        $output .= '<tr>' .
                            '<th scope="row"></th>' .
                            '<td>'.$result->player_two_username.'</td>' .
                            '<td>'.$result->player_two_kill.'</td>' .
                            '</tr>';
                    }else{
                        $output .= '<tr>' .
                            '<th scope="row">'.$i.'</th>' .
                            '<td>'.$result->player_one_username.'</td>' .
                            '<td>'.$result->player_one_kill.'</td>' .
                            '</tr>';
                    }

                }

                $output .= '</tbody></table></div></div>';
            }
            return Response($output);
        }
    }




}
