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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <!--===============================================================================================-->
    <script src="{{asset('vendor')}}/bootstrap/js/bootstrap.min.js"></script>
    <!--===============================================================================================-->
    @yield('js')
    <title>@yield('title')</title>
</head>
<body class="d-flex flex-column">
<style>
    body {
        background: #ffd89b;
        background: -webkit-linear-gradient(to right, #ffd89b, #19547b);
        background: linear-gradient(to right, #ffd89b, #19547b);
        min-height: 100vh;
    }
</style>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top nav-bg">
    <a class="navbar-brand" href="{{route('user.userHomeView')}}"><img src="{{asset('images/icons')}}/P$M.png" alt="PlayForMoney" style="max-width: 100px; max-height: 100px;"></a>
    <div class="collapse navbar-collapse nav-bg" id="navbarCollapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="{{route('admin.home')}}" class="nav-link">Add Game</a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.gameList')}}" class="nav-link">Game List</a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.viewAddAdmin')}}" class="nav-link">Add Admin</a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.matchView')}}" class="nav-link">Add Match</a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.matchList')}}" class="nav-link">Match List</a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.matchPlayerSearchView')}}" class="nav-link">Player Joined</a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.userSearchView')}}" class="nav-link">Search User</a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.adminLogout')}}" class="nav-link">Logout</a>
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

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
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
