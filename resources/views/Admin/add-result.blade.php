@extends('Layout.admin-layout')
@section('css')
    <link rel="stylesheet" href="{{asset('css')}}/style.css">
@endsection
@section('title')
    Result
@endsection
@section('container')
    <div class="play-wraper">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                @if(session('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Congrats !</strong> {{session('message')}}.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                <div class="card">
                    <div class="card-header" style="background-color: darkred;">
                        <div class="text-center">
                            <h2 style="color: white;">{{$player_resut->user_first_name}} {{$player_resut->user_last_name}}</h2>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <form method="POST" action="/p4m.admin.login/match-players/{id}"  enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group-1">
                                            <div class="row">
                                                <div class="col-8">
                                                    <h6>{{$player_resut->game_user_name}}</h6>
                                                </div>
                                                <div class="col-4">
                                                    <label class="custom">Winner
                                                        <input type="checkbox" name="winner" value="1">
                                                        <span class="checkmark"></span>
                                                    </label>
                                                </div>
                                            </div>
                                            <input type="hidden" name="name" value="{{$player_resut->user_first_name}} {{$player_resut->user_last_name}}">
                                            <input type="number" name="kill" placeholder="Kills" required>
                                            <input type="hidden" name="match_time" value="{{$match->match_start}}">
                                            <input type="hidden" name="match_id" value="{{$player_resut->match_id}}">
                                            <input type="hidden" name="joined_user_id" value="{{$player_resut->user_id}}">
                                            @php
                                                $url = \Illuminate\Support\Facades\URL::previous();
                                                $timezone = 'ASIA/DHAKA';
                                                $date = new DateTime('now', new DateTimeZone($timezone));
                                                $localtime = $date->format('d.m.Y');
                                            @endphp
                                            <input type="hidden" name="match_date" value="{{$localtime}}">
                                            <input type="hidden" name="users_joined_in_match_id" value="{{$player_resut->users_joined_in_match_id}}">
                                            <input type="hidden" name="url" value="{{$url}}">
                                        </div>
                                        <div class="form-submit mt-2">
                                            <input type="submit" name="submit" id="submit" class="btn btn-primary btn-block" value="Save" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
