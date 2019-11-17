<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('fonts')}}/material-icon/css/material-design-iconic-font.min.css">

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor')}}/bootstrap/css/bootstrap.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="{{asset('css')}}/registration.css">
</head>
<body>

<div class="main">

    <div class="container">
        <form method="POST" action="register" class="appointment-form" id="appointment-form">
            @csrf
            <h2>Create Account</h2>
            <div class="form-group-1">
                <div class="row">
                    <div class="col-md-6">
                        <input type="text" name="first_name" id="title" placeholder="First Name" required />
                    </div>
                    <div class="col-md-6">
                        <input type="text" name="last_name" id="name" placeholder="Last Name" required />
                    </div>
                </div>
                <input type="username" name="username" id="username" placeholder="User Name" required />
                <input type="email" name="email" id="email" placeholder="Email" required />
                <input type="password" name="password" id="password" placeholder="Password" required />
                <input type="password" name="confirm_password" id="confirm_password" placeholder="Confirm Password" required />
            </div>
            <div class="form-submit">
                <input type="submit" name="submit" id="submit" class="btn btn-primary btn-block" value="Register Me" />
            </div>
            <div class="text-center">
                <p>Already a User? <a href="{{route('user.login')}}">Sign In Here</a></p>
            </div>
        </form>
    </div>

</div>

<!-- JS -->
<script src="{{asset('vendor')}}/jquery/jquery-3.2.1.min.js"></script>
<script src="{{asset('js')}}/registration.js"></script>
</body><!-- This templates was made by Akram Hossain -->
</html>
