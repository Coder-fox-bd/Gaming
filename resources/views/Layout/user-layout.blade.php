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
    .cut-text {
        text-overflow: ellipsis;
        overflow: hidden;
        width: 232px;
        height: 1.2em;
        white-space: nowrap;
    }
    hr{
        margin-top: 0px;
        margin-bottom: 0px;
    }

    .dropdown{
        position: relative;
    }

    .dropdown-toggle {
        white-space: nowrap;
    }

    .dropdown-toggle::after {
        display: inline-block;
        margin-left: 0.255em;
        vertical-align: 0.255em;
        content: "";
        border-top: 0.3em solid;
        border-right: 0.3em solid transparent;
        border-bottom: 0;
        border-left: 0.3em solid transparent;
    }

    .dropdown-toggle:empty::after {
        margin-left: 0;
    }

    .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        display: none;
        float: left;
        padding: 0.5rem 0;
        margin: 0.125rem 0 0;
        font-size: 0.85rem;
        color: #858796;
        text-align: left;
        list-style: none;
        background-color: #fff;
        background-clip: padding-box;
        border: 1px solid #e3e6f0;
        border-radius: 0.35rem;
        min-width: 200px;
        max-width: 330px;
    }


    .dropdown-menu-right {
        right: 0;
        left: auto;
    }



    .dropup .dropdown-menu {
        top: auto;
        bottom: 100%;
        margin-top: 0;
        margin-bottom: 0.125rem;
    }

    .dropup .dropdown-toggle::after {
        display: inline-block;
        margin-left: 0.255em;
        vertical-align: 0.255em;
        content: "";
        border-top: 0;
        border-right: 0.3em solid transparent;
        border-bottom: 0.3em solid;
        border-left: 0.3em solid transparent;
    }

    .dropup .dropdown-toggle:empty::after {
        margin-left: 0;
    }

    .dropright .dropdown-menu {
        top: 0;
        right: auto;
        left: 100%;
        margin-top: 0;
        margin-left: 0.125rem;
    }

    .dropright .dropdown-toggle::after {
        display: inline-block;
        margin-left: 0.255em;
        vertical-align: 0.255em;
        content: "";
        border-top: 0.3em solid transparent;
        border-right: 0;
        border-bottom: 0.3em solid transparent;
        border-left: 0.3em solid;
    }

    .dropright .dropdown-toggle:empty::after {
        margin-left: 0;
    }

    .dropright .dropdown-toggle::after {
        vertical-align: 0;
    }

    .dropleft .dropdown-menu {
        top: 0;
        right: 100%;
        left: auto;
        margin-top: 0;
        margin-right: 0.125rem;
    }

    .dropleft .dropdown-toggle::after {
        display: inline-block;
        margin-left: 0.255em;
        vertical-align: 0.255em;
        content: "";
    }

    .dropleft .dropdown-toggle::after {
        display: none;
    }

    .dropleft .dropdown-toggle::before {
        display: inline-block;
        margin-right: 0.255em;
        vertical-align: 0.255em;
        content: "";
        border-top: 0.3em solid transparent;
        border-right: 0.3em solid;
        border-bottom: 0.3em solid transparent;
    }

    .dropleft .dropdown-toggle:empty::after {
        margin-left: 0;
    }

    .dropleft .dropdown-toggle::before {
        vertical-align: 0;
    }

    .dropdown-menu[x-placement^="top"], .dropdown-menu[x-placement^="right"], .dropdown-menu[x-placement^="bottom"], .dropdown-menu[x-placement^="left"] {
        right: auto;
        bottom: auto;
    }


    .dropdown-item {
        display: block;
        width: 100%;
        padding: 0.25rem 1.5rem;
        clear: both;
        font-weight: 400;
        color: #3a3b45;
        text-align: inherit;
        white-space: nowrap;
        background-color: transparent;
        border: 0;
    }

    .dropdown-item:hover, .dropdown-item:focus {
        color: #2e2f37;
        text-decoration: none;
        background-color: #f8f9fc;
    }

    .dropdown-item.active, .dropdown-item:active {
        color: #fff;
        text-decoration: none;
        background-color: #4e73df;
    }

    .dropdown-item.disabled, .dropdown-item:disabled {
        color: #858796;
        pointer-events: none;
        background-color: transparent;
    }

    .dropdown-menu.show {
        display: block;
    }

    .dropdown-header {
        display: block;
        padding: 0.5rem 1.5rem;
        margin-bottom: 0;
        font-size: 0.875rem;
        color: #858796;
        white-space: nowrap;
    }
</style>
<nav class="navbar navbar-expand-md bg-white navbar-white">
    <!-- Brand -->
    <a class="navbar-brand" href="{{route('user.userHomeView')}}">PlayForMoney</a>


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
        </ul>
    </div>

        <!-- Nav Item - Alerts -->
        <div class="nav-item ml-auto dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bell fa-fw"></i>
                <!-- Counter - Alerts -->
                <span class="badge badge-danger badge-counter">3+</span>
            </a>
            <!-- Dropdown - Alerts -->
            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                <h6 class="dropdown-header">
                    Alerts Center
                </h6>
                <hr>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-primary">
                            <i class="fas fa-file-alt text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">December 12, 2019</div>
                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                    </div>
                </a>
                <hr>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-success">
                            <i class="fas fa-donate text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">December 7, 2019</div>
                        $290.29 has been deposited into your account!
                    </div>
                </a>
                <hr>
                <a class="dropdown-item d-flex align-items-center" href="#">
                    <div class="mr-3">
                        <div class="icon-circle bg-warning">
                            <i class="fas fa-exclamation-triangle text-white"></i>
                        </div>
                    </div>
                    <div>
                        <div class="small text-gray-500">December 2, 2019</div>
                        Spending Alert: We've noticed unusually high spending for your account.
                    </div>
                </a>
                <hr>
                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
            </div>
        </div>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>
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
