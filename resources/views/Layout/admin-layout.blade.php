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
<nav class="navbar navbar-expand-md bg-white navbar-white">
    <!-- Brand -->
    <a class="navbar-brand" href="#">PlayForMoney</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler custom-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="{{route('admin.home')}}" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.viewAddAdmin')}}" class="nav-link">Add Admin</a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.matchView')}}" class="nav-link">Add Match</a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.matchPlayerSearchView')}}" class="nav-link">Player Joined</a>
            </li>
            <li class="nav-item">
                <a href="{{route('admin.userSearchView')}}" class="nav-link">Search User</a>
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
