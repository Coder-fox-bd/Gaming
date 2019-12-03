@extends('Layout.user-layout')
@section('css')
    <link rel="stylesheet" href="{{asset('css')}}/style.css">
@endsection
@section('title')
    Home
@endsection
@section('container')
    <div class="play-wraper">
        @foreach($Games as $game)
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <img src="{{asset('images/games')}}/{{$game->game_image}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{$game->game_name}}</h5>
                            <h6 class="card-subtitle mb-2 text-muted">{{$game->game_types}}</h6>
                            <p class="card-text">{{$game->game_detail}}</p>
                            <a href="{{route('user.homeView', [$game->game_id])}}" class="btn btn-primary">Check Out</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
