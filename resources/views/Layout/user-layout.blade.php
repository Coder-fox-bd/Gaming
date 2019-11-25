<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('fonts')}}/material-icon/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" href="{{asset('fonts')}}/font-awesome/css/all.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor')}}/bootstrap/css/bootstrap.min.css">
    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('css')}}/user-layout.css">
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    @yield('css')
    <!-- JS -->
    <script src="{{asset('vendor')}}/jquery/jquery-3.2.1.min.js"></script>
    <script src="{{asset('vendor')}}/jquery/jquery.slim.js"></script>
    <!--===============================================================================================-->
    <script src="{{asset('vendor')}}/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    @yield('js')
    <title>@yield('title')</title>
</head>
<body class="d-flex flex-column">
<style>
    .dropdown-menu{
        min-width: 300px;
    }
    .cut-text {
        text-overflow: ellipsis;
        overflow: hidden;
        width: 230px;
        height: 1.2em;
        white-space: nowrap;
    }
    hr{
        margin-top: 0px;
        margin-bottom: 0px;
    }
</style>
<nav class="navbar navbar-expand-md bg-white navbar-white">
    <!-- Brand -->
    <a class="navbar-brand" href="{{route('user.userHomeView')}}">PlayForMoney</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="{{route('user.userHomeView')}}" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('user.profileView')}}">Profile</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{route('user.resultView')}}">Result</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false"><i class="fas fa-bell"></i>(<strong>2</strong>)</a>
                <div class="dropdown-menu">
                    <div class="row">
                        <div class="col-12 text-center">
                            <a href="" class="text-center">Mark all as Read</a>
                            <hr>
                        </div>
                    </div>
                    <a class="dropdown-item" href="#">
                        <div class="row">
                            <div class="col-md-2 col-sm-3 col-xs-3"><div class="notify-img"><img src="http://placehold.it/45x45" style="height: 30px; width: 30px;" alt=""></div></div>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                <p class="cut-text mt-1">Notification text will be here. Notification text will be here</p>
                            </div>
                        </div>
                    </a>
                    <hr>
                    <a class="dropdown-item" href="#" style="background-color: antiquewhite">
                        <div class="row">
                            <div class="col-md-2 col-sm-3 col-xs-3"><div class="notify-img"><img src="http://placehold.it/45x45" style="height: 30px; width: 30px;" alt=""></div></div>
                            <div class="col-md-9 col-sm-9 col-xs-9">
                                <p class="cut-text mt-1">Notification text will be here. Notification text will be here</p>
                            </div>
                        </div>
                    </a>
                    <hr>
                    <div class="row">
                        <div class="col-12 text-center">
                            <a href=""><i class="fa fa-eye"></i> See All</a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</nav>
<div id="page-content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                @yield('container')
            </div>
        </div>
    </div>
    </div>
</div>
<footer id="sticky-footer" class="py-3 bg-white">
    <div class="container text-center">
        <small>Copyright &copy; <a href="https://github.com/Coder-fox-bd">Akram Hossain</a></small>
    </div>
</footer>
</body>
</html>
