@extends('Layout.user-layout')
@section('css')
    <link rel="stylesheet" href="{{asset('css')}}/style.css">
@endsection
@section('title')
    Home
@endsection
@section('container')
    <div class="play-wraper">
        <style>
            .blur{
                filter: blur(8px);
                -webkit-filter: blur(8px);
            }
            .button-one {
                background-color: #f00;
                border: none;
                color: white;
                padding: 2px 6px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 13px;
                margin-top: 17px;
                margin-bottom: 10px;
                font-weight: bold;
            }
            .button-two {
                background-color: #4267b2;
                border: none;
                color: white;
                padding: 2px 6px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 14px;
                margin-top: 16px;
                margin-bottom: 10px;
                font-weight: bold;
            }
            .button-three {
                background: #f09433;
                background: -moz-linear-gradient(45deg, #f09433 0%, #e6683c 25%, #dc2743 50%, #cc2366 75%, #bc1888 100%);
                background: -webkit-linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%);
                background: linear-gradient(45deg, #f09433 0%,#e6683c 25%,#dc2743 50%,#cc2366 75%,#bc1888 100%);
                filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f09433', endColorstr='#bc1888',GradientType=1 );
                border: none;
                color: white;
                padding: 2px 6px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                font-size: 14px;
                margin-top: 16px;
                margin-bottom: 10px;
                font-weight: bold;
            }
            .my-card{
                background-color: white;
                border-radius: 10px;
            }
        </style>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 blur" src="{{asset('images/slide')}}/blar-bg.jpg" alt="First slide">
                    <div class="carousel-caption">
                        <div class="row my-card" style="margin-bottom: 15px;">
                            <div class="col-3 text-center">
                                <img src="{{asset('images/icons')}}/test.png" alt="" style="max-width: 40px; max-height: 40px; margin-top: 10px; margin-bottom: 10px;">
                            </div>
                            <div class="col-5 p-0 text-center">
                                <p style="color: black; margin-top: 16px;">Play For Money</p>
                            </div>
                            <div class="col-4 p-0 text-center">
                                <a href="" class="button-one" style="text-decoration: none;">SUBSCRIBE</a>
                            </div>
                        </div>
                        <h6>Subscribe YouTube Channel</h6>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 blur" src="{{asset('images/slide')}}/blar-bg.jpg" alt="Second slide">
                    <div class="carousel-caption">
                        <div class="row my-card" style="margin-bottom: 15px;">
                            <div class="col-3 text-center">
                                <img src="{{asset('images/icons')}}/test.png" alt="" style="max-width: 40px; max-height: 40px; margin-top: 10px; margin-bottom: 10px;">
                            </div>
                            <div class="col-5 p-0 text-center">
                                <p style="color: black; margin-top: 16px;">Play For Money</p>
                            </div>
                            <div class="col-4 p-0 text-center">
                                <a href="" class="button-two" style="text-decoration: none;"><i class="far fa-thumbs-up"></i>Like</a>
                            </div>
                        </div>
                        <h6>Like on Facebook</h6>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 blur" src="{{asset('images/slide')}}/blar-bg.jpg" alt="Third slide">
                    <div class="carousel-caption">
                        <div class="row my-card" style="margin-bottom: 15px;">
                            <div class="col-3 text-center">
                                <img src="{{asset('images/icons')}}/test.png" alt="" style="max-width: 40px; max-height: 40px; margin-top: 10px; margin-bottom: 10px;">
                            </div>
                            <div class="col-5 p-0 text-center">
                                <p style="color: black; margin-top: 16px;">Play For Money</p>
                            </div>
                            <div class="col-4 p-0 text-center">
                                <a href="" class="button-three" style="text-decoration: none;"><i class="fab fa-instagram"></i>Follow</a>
                            </div>
                        </div>
                        <h6>Follow on Instagram</h6>
                    </div>
                </div>
            </div>

        </div>


        @foreach($Games as $game)
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 20px">
                    <div class="card" style="margin-bottom: 0px;">
                        <a href="{{route('user.homeView', [$game->game_id])}}">
                            <img src="{{asset('images/games')}}/{{$game->game_image}}" class="card-img-top" alt="...">
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
