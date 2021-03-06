@extends('Layout.admin-layout')
@section('css')
    <link rel="stylesheet" href="{{asset('css')}}/style.css">
@endsection
@section('title')
    Add Match
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
                            <h2 style="color: white;">Add Match</h2>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <form method="POST" action="/p4m.admin.login/add-match" class="appointment-form" id="appointment-form" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group-1">
                                            <select name="match_game_id" id="match_game_id">
                                                <option value="">Select Game</option>
                                                @foreach($Games as $Game)
                                                <option value="{{$Game->game_id}}">{{$Game->game_name}}</option>
                                                @endforeach
                                            </select>
                                            <input type="number" name="win_prize" id="win_prize" placeholder="Win Prize" required />
                                            <input type="number" name="per_kill" id="per_kill" placeholder="Per Kill"/>
                                            <input type="number" name="entry_fee" id="entry_fee" placeholder="Entry Fee" required />
                                            <select name="type" id="type">
                                                <option value="">Select Type</option>
                                                @foreach($Match_type as $type)
                                                    <option value="{{$type->match_type}}">{{$type->type_name}}</option>
                                                @endforeach
                                            </select>
                                            <input type="text" name="version" id="version" placeholder="Version"/>
                                            <input type="text" name="map" id="map" placeholder="Map"/>
                                            <input type="text" name="match_start" id="match_start" placeholder="Match Start Time" required />
                                            <input type="text" name="date" id="date" placeholder="Match Date" required />
                                            <input type="text" name="match_code" id="match_code" placeholder="Match Code" required />
                                        </div>
                                        <div class="form-submit">
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
