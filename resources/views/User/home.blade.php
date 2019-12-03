@extends('Layout.user-layout')
@section('css')
    <link rel="stylesheet" href="{{asset('css')}}/style.css">
@endsection
@section('title')
    Matches
@endsection
@section('container')
    <style>
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
                                    <h3 style="color: white;">{{$data->game_name}}</h3>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-4 text-center">
                                            <h6 class="red-font">Win Prize</h6>
                                            <h6 class="mt-3">{{$data->win_prize}}</h6>
                                        </div>
                                        <div class="col-4 text-center">
                                            <h6 class="red-font">Per Kill</h6>
                                            <h6 class="mt-3">{{$data->per_kill}}</h6>
                                        </div>
                                        <div class="col-4 text-center">
                                            <h6 class="red-font">Entry Fee</h6>
                                            <h6 class="mt-3">{{$data->entry_fee}}</h6>
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
                                            <h6 class="red-font">Type</h6>
                                            <h6 class="mt-3">{{$type}}</h6>
                                        </div>
                                        <div class="col-4 text-center">
                                            <h6 class="red-font">Version</h6>
                                            <h6 class="mt-3">{{$data->version}}</h6>
                                        </div>
                                        <div class="col-4 text-center">
                                            <h6 class="red-font">Map</h6>
                                            <h6 class="mt-3">{{$data->map}}</h6>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 text-center red-font">
                                            Match will start at {{$data->match_start}}
                                        </div>
                                    </div>
                                    <div class="row mt-1">
                                        <div class="col-12 text-center">
                                            <a href="{{route('user.joinView', [$data->match_id])}}" class="btn btn-primary">JOIN NOW</a>
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
