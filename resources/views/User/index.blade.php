<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>

    <link rel="icon" type="image/png" href="images/icons/p_kvQ_icon.ico"/>
    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('fonts')}}/material-icon/css/material-design-iconic-font.min.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor')}}/bootstrap/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.js"></script>


</head>
<body>
<style>
    body{
        background-color: #f6f6f6;
    }
    .form-control{
        border-radius: 10px;
        margin-top: 30px;
        -webkit-box-shadow: 0px 18px 98px -59px rgba(0,0,0,0.75);
        -moz-box-shadow: 0px 18px 98px -59px rgba(0,0,0,0.75);
        box-shadow: 0px 18px 98px -59px rgba(0,0,0,0.75);
    }
    .btn-block{
        border-radius: 10px;
        margin-top: 15px;
        background-color: #0360c5;
        color: white;
        font-weight: bold;
    }
    #page-content {
        flex: 1 0 auto;
    }
</style>



<div id="page-content">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-7">
                <div class="container">
                    <form method="POST" action="/login">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 text-center" style="margin-top: 15%;">
                                <img src="{{asset('images/icons')}}/P$M.png" alt="" style="height: 70px; width: 120px;">
                            </div>
                        </div>
                        @if(session('message'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Woops !</strong> {{session('message')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        @if(session('message2'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Congrats!</strong> {{session('message2')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <div class="form-group-1" style="margin-top: 20%">
                            <input  type="text" class="form-control" name="user_username" placeholder="Type your email or username" required/>
                            <input type="password" class="form-control" name="password" placeholder="Type your password" required/>
                        </div>
                        <div class="text-right p-t-8 p-b-31 mt-2">
                            <a href="{{route('password-reminder')}}">
                                Forgot password?
                            </a>
                        </div>
                        <div class="form-submit">
                            <input type="submit" class="btn btn-block" class="btn btn-primary btn-block" value="Login" />
                        </div>
                        <div class="text-center mt-2">
                            <p>New User? <a href="{{route('user.registrationView')}}">Sign Up</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
</body><!-- This templates was made by Akram Hossain -->
</html>



























{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--	<title>Login</title>--}}
{{--	<meta charset="UTF-8">--}}
{{--	<meta name="viewport" content="width=device-width, initial-scale=1">--}}
{{--<!--===============================================================================================-->--}}
{{--	<link rel="icon" type="image/png" href="images/icons/p_kvQ_icon.ico"/>--}}
{{--<!--===============================================================================================-->--}}
{{--	<link rel="stylesheet" type="text/css" href="{{asset('vendor')}}/bootstrap/css/bootstrap.min.css">--}}
{{--	<link rel="stylesheet" type="text/css" href="{{asset('fonts')}}/iconic/css/material-design-iconic-font.min.css">--}}
{{--<!--===============================================================================================-->--}}
{{--	<link rel="stylesheet" type="text/css" href="{{asset('vendor')}}/animate/animate.css">--}}
{{--<!--===============================================================================================-->--}}
{{--	<link rel="stylesheet" type="text/css" href="{{asset('vendor')}}/css-hamburgers/hamburgers.min.css">--}}
{{--<!--===============================================================================================-->--}}
{{--	<link rel="stylesheet" type="text/css" href="{{asset('vendor')}}/animsition/css/animsition.min.css">--}}
{{--<!--===============================================================================================-->--}}
{{--	<link rel="stylesheet" type="text/css" href="{{asset('vendor')}}/select2/select2.min.css">--}}
{{--<!--===============================================================================================-->--}}
{{--	<link rel="stylesheet" type="text/css" href="{{asset('vendor')}}/daterangepicker/daterangepicker.css">--}}
{{--<!--===============================================================================================-->--}}
{{--	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/util.css">--}}
{{--	<link rel="stylesheet" type="text/css" href="{{asset('css')}}/main.css">--}}
{{--<!--===============================================================================================-->--}}
{{--</head>--}}
{{--<body>--}}

{{--	<div class="limiter">--}}
{{--		<div class="container-login" style="background-color: white;">--}}
{{--			<div class="wrap-login p-l-55 p-r-55 p-t-65 p-b-54">--}}
{{--				<form class="login-form validate-form" method="POST" action="/login">--}}
{{--                    @csrf--}}
{{--					<span class="login-form-title p-b-49">--}}
{{--						Login--}}
{{--					</span>--}}
{{--                    @if(session('message'))--}}
{{--                        <div class="alert alert-danger alert-dismissible fade show" role="alert">--}}
{{--                            <strong>Woops !</strong> {{session('message')}}--}}
{{--                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--                                <span aria-hidden="true">&times;</span>--}}
{{--                            </button>--}}
{{--                        </div>--}}
{{--                    @endif--}}
{{--					<div class="wrap-input validate-input m-b-23" data-validate = "Username is reauired">--}}
{{--						<span class="label-input100">Username</span>--}}
{{--						<input class="input" type="text" name="user_username" placeholder="Type your username" required>--}}
{{--						<span class="focus-input" data-symbol="&#xf206;"></span>--}}
{{--					</div>--}}

{{--					<div class="wrap-input validate-input" data-validate="Password is required">--}}
{{--						<span class="label-input">Password</span>--}}
{{--						<input class="input" type="password" name="password" placeholder="Type your password" required>--}}
{{--						<span class="focus-input" data-symbol="&#xf190;"></span>--}}
{{--					</div>--}}

{{--					<div class="text-right p-t-8 p-b-31">--}}
{{--						<a href="{{route('password-reminder')}}">--}}
{{--							Forgot password?--}}
{{--						</a>--}}
{{--					</div>--}}

{{--					<div class="container-login-form-btn">--}}
{{--						<div class="wrap-login-form-btn">--}}
{{--							<button class="login-form-btn">--}}
{{--								Login--}}
{{--							</button>--}}
{{--						</div>--}}
{{--                    </div>--}}
{{--					<div class="text-center">--}}
{{--						<p>New User? <a href="{{route('user.registrationView')}}">Sign Up</a></p>--}}
{{--					</div>--}}
{{--				</form>--}}
{{--			</div>--}}
{{--		</div>--}}
{{--	</div>--}}


{{--<!--===============================================================================================-->--}}
{{--	<script src="{{asset('vendor')}}/jquery/jquery-3.2.1.min.js"></script>--}}
{{--<!--===============================================================================================-->--}}
{{--	<script src="{{asset('vendor')}}/animsition/js/animsition.min.js"></script>--}}
{{--<!--===============================================================================================-->--}}
{{--	<script src="{{asset('vendor')}}/bootstrap/js/bootstrap.min.js"></script>--}}
{{--<!--===============================================================================================-->--}}
{{--	<script src="{{asset('vendor')}}/select2/select2.min.js"></script>--}}
{{--<!--===============================================================================================-->--}}
{{--	<script src="{{asset('vendor')}}/daterangepicker/moment.min.js"></script>--}}
{{--	<script src="{{asset('vendor')}}/daterangepicker/daterangepicker.js"></script>--}}
{{--<!--===============================================================================================-->--}}
{{--	<script src="{{asset('vendor')}}/countdowntime/countdowntime.js"></script>--}}
{{--<!--===============================================================================================-->--}}
{{--	<script src="{{asset('js')}}/main.js"></script>--}}
{{--    <script>--}}
{{--        $(document).ready(function(){--}}
{{--            $('[data-toggle="tooltip"]').tooltip();--}}
{{--        });--}}
{{--    </script>--}}
{{--</body>--}}
{{--</html>--}}
