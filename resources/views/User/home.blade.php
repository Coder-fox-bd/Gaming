@extends('Layout.user-layout')
@section('css')
    <link rel="stylesheet" href="{{asset('css')}}/style.css">
@endsection
@section('title')
    Matches
@endsection
@section('container')
    <style>
        body{
            background-color: #212529;
        }
        .btn-primary{
            padding: 3px 20px;
            background-color: #608fc2;
            border-radius: 10px;
            box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
        }
        .card .card-header{
            border-radius: 10px;
        }
        .card{
            border-radius: 10px;
        }
        .card-header{
            padding: 0.5rem 1.25rem;
        }
        .btn-resize{
            padding: 5px 20px;
            font-size: 14px;
            font-weight: bold;
            width: 30%;
        }
        .btn-resize_lobby{
            padding-top: 5px;
            padding-bottom: 5px;
            padding-left: 18px;
            padding-right: 20px;
            font-size: 14px;
            font-weight: bold;
            width: 30%;
        }
        p{
            margin-bottom: 0px;
        }
        .play-wraper{
            margin-top: 28%;
        }
    </style>
    <div class="play-wraper">
        @foreach($datas as $data)
            @if(!$data->win_prize)
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center">
                        <h2 style="color: red">Oops! Sorry. No Match Available.</h2>
                    </div>
                </div>
            @else
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="card">
                            <div class="card-header" style="background-color: red;">
                                <div class="text-center">
                                    <h4 style="color: white;">{{$data->game_name}} {{$data->match_code}}</h4>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-4 text-center">
                                            <p class="red-font" style="font-size:14px; font-weight: bold;">Win Prize</p>
                                            <p style="font-size:14px; font-weight: bold;">{{$data->win_prize}}</p>
                                        </div>
                                        <div class="col-4 text-center">
                                            <p class="red-font" style="font-size:14px; font-weight: bold;">Per Kill</p>
                                            <p style="font-size:14px; font-weight: bold;">{{$data->per_kill}}</p>
                                        </div>
                                        <div class="col-4 text-center">
                                            <p class="red-font" style="font-size:14px; font-weight: bold;">Entry Fee</p>
                                            <p style="font-size:14px; font-weight: bold;">{{$data->entry_fee}}</p>
                                            <p style="margin:0px; font-size: 10px;">(per person)</p>
                                        </div>
                                    </div>
                                    @php
                                        if($data->type==1){
                                            $type = 'Solo';
                                        }elseif($data->type==2){
                                            $type = 'Duo';
                                        }else{
                                             $type = 'Squad';
                                        }
                                    @endphp
                                    <div class="row mt-1">
                                        <div class="col-4 text-center">
                                            <p class="red-font" style="font-size:14px; font-weight: bold;">Type</p>
                                            <p style="font-size:14px; font-weight: bold;">{{$type}}</p>
                                        </div>
                                        <div class="col-4 text-center">
                                            <p class="red-font" style="font-size:14px; font-weight: bold;">Version</p>
                                            <p style="font-size:14px; font-weight: bold;">{{$data->version}}</p>
                                        </div>
                                        <div class="col-4 text-center">
                                            <p class="red-font" style="font-size:14px; font-weight: bold;">Map</p>
                                            <p style="font-size:14px; font-weight: bold;">{{$data->map}}</p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 text-center red-font">
                                            Match will start at {{$data->match_start}}
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-12 text-center">
                                            <a href="{{route('user.waitView', [$data->match_id])}}" class="btn btn-primary btn-resize_lobby">LOBBY</a>
                                            <a href="{{route('user.joinView', [$data->match_id])}}" class="btn btn-primary btn-resize">JOIN</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        @endforeach
    </div>
@endsection
