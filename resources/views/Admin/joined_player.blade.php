@extends('Layout.admin-layout')
@section('css')
    <link rel="stylesheet" href="{{asset('css')}}/style.css">
@endsection
@section('title')
    Players
@endsection
@section('container')
    <style>
        .form-control:focus {
            box-shadow: none;
        }


        body {
            background: #ffd89b;
            background: -webkit-linear-gradient(to right, #ffd89b, #19547b);
            background: linear-gradient(to right, #ffd89b, #19547b);
            min-height: 100vh;
        }

        .form-control::placeholder {
            font-size: 0.95rem;
            color: #aaa;
            font-style: italic;
        }
    </style>
    <div class="play-wraper">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-0">
                <form action="/p4m.admin.login/match-players" method="get">
                    <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
                        <div class="input-group">
                            <input type="search" name="match_code" placeholder="Search by the match code" aria-describedby="button-addon1" class="form-control border-0 bg-light">
                            <div class="input-group-append">
                                <button id="button-addon1" type="submit" class="btn btn-link text-primary"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-12 p-0 mt-2">
                <table class="table table-light">
                    <thead class="thead-dark border-0">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Player Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Game Username</th>
                        <th scope="col">Match Code</th>
                    </tr>
                    </thead>
                    <tbody>
                    @php
                        $i=0;
                    @endphp
                    @if($joined_player)
                        @foreach($joined_player as $player)
                            @if($player->user_first_name)
                                @php
                                    $i++;
                                @endphp
                                <tr>
                                    <th scope="row">{{$i}}</th>
                                    <td>{{$player->user_first_name}} {{$player->user_last_name}}</td>
                                    <td>{{$player->user_username}}</td>
                                    <td>{{$player->game_user_name}}</td>
                                    <td>{{$player->match_code}}</td>
                                </tr>
                            @else
                                <div class="text-center">
                                    <h6 class="red-font">No Data Available</h6>
                                </div>
                            @endif
                        @endforeach
                    @else
                        <div class="text-center">
                            <h6 class="red-font">There is no match by this name</h6>
                        </div>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection
