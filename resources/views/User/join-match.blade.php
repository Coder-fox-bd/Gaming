@extends('Layout.user-layout')
@section('css')
    <link rel="stylesheet" href="{{asset('css')}}/style.css">
@endsection
@section('title')
    Home
@endsection
        <div class="play-wraper">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <div class="card">
                        <div class="card-header" style="background-color: red;">
                            <div class="text-center">
                                <h2 style="color: white;">Join Match</h2>
                            </div>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="/p4m.admin.login/add-match" class="appointment-form" id="appointment-form" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group-1">
                                    <input type="number" name="win_prize" id="win_prize" placeholder="Win Prize" required />
                                    <input type="number" name="per_kill" id="per_kill" placeholder="Per Kill" required />
                                    <input type="number" name="entry_fee" id="entry_fee" placeholder="Entry Fee" required />
                                    <input type="text" name="type" id="type" placeholder="Type" required />
                                    <input type="text" name="version" id="version" placeholder="Version" required />
                                    <input type="text" name="map" id="map" placeholder="Map" required />
                                    <input type="text" name="match_start" id="match_start" placeholder="Match Start Time" required />
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
@endsection
