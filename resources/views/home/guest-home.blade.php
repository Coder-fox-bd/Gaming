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

</head>
<body>
<body class="d-flex flex-column">
<style>
    .nav-bg{
        background-color: #00475e;
    }
    .navbar{
        border-bottom: 5px solid #ffc600;
    }
</style>


<nav class="navbar navbar-expand-lg navbar-dark fixed-top nav-bg">
    <a class="navbar-brand" href="{{route('user.userHomeView')}}"><img src="{{asset('images/icons')}}/P$M.png" alt="PlayForMoney" style="max-width: 100px; max-height: 100px;"></a>
</nav>




<footer id="sticky-footer" class="py-3 bg-white">
    <div class="container text-center">
        <small>Copyright &copy; <a href="https://github.com/Coder-fox-bd">Akram Hossain</a></small>
    </div>
</footer>
</body>


<!--===============================================================================================-->
<script src="{{asset('vendor')}}/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
</body>
</html>
