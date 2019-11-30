@extends('Layout.admin-layout')
@section('css')
    <link rel="stylesheet" href="{{asset('css')}}/style.css">
@endsection
@section('title')
    Match List
@endsection
@section('container')
    <style>
        body {
            background: #ffd89b;
            background: -webkit-linear-gradient(to right, #ffd89b, #19547b);
            background: linear-gradient(to right, #ffd89b, #19547b);
            min-height: 100vh;
        }
    </style>
    <div class="play-wraper">
        <div class="row">
            <div class="col-12 p-0 mt-2">
                <div class="row">
                    <div class="col-12">
                        @php
                            date_default_timezone_set('Asia/Dhaka');
                            echo date('Y-m-d H:i:s');
                        @endphp
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

