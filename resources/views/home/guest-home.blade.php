<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Font Icon -->
    <link rel="stylesheet" href="{{asset('fonts')}}/font-awesome/css/all.css">
    <link rel="stylesheet" href="{{asset('css')}}/home.css">
    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor')}}/bootstrap/css/bootstrap.min.css">

</head>
<body>
<style>
    html,body
    {
        width: 100%;
        margin: 0px;
        padding: 0px;
        overflow-x: hidden;
        background: black
    }

    a.button{
         display:inline-block;
         padding:0.5em 3em;
         border:0.16em solid #FFFFFF;
         margin:0 0.3em 0.3em 0;
         box-sizing: border-box;
         text-decoration:none;
         text-transform:uppercase;
         font-family:'Roboto',sans-serif;
         font-weight:400;
         color:#FFFFFF;
         text-align:center;
         transition: all 0.15s;
    }
    .button2{
         display:inline-block;
         padding:0.5em 3em;
         border:0.16em solid #FFFFFF;
         margin:0 0.3em 0.3em 0;
         box-sizing: border-box;
         text-decoration:none;
         text-transform:uppercase;
         font-family:'Roboto',sans-serif;
         font-weight:400;
         color:#FFFFFF;
         text-align:center;
         transition: all 0.15s;
    }
    .button {
        background-color: #a50303;
        border: none;
        color: white;
        padding: 1em 2em;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size:4vw;
    }
    .zoom {
        transition: transform .2s; /* Animation */
    }

    .zoom:hover {
        color: yellow;
        transform: scale(1.2); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
    }
    .footer{
        background-color: gray;
    }
</style>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top nav-bg">
            <a class="navbar-brand"><img src="{{asset('images/icons')}}/P$M.png" alt="PlayForMoney" style="max-width: 100px; max-height: 100px;"></a>
            <span class="navbar-text ml-auto"><a href="{{route('user.login')}}" style="font-size: 24px; text-decoration: none"><span class="bg-custom">Login</span></a></span>
            <span class="navbar-text" style="font-weight: bold; color: white; font-size: 24px;">|</span>
            <span class="navbar-text"><a href="{{route('user.registrationView')}}" style="font-size: 24px; text-decoration: none;"><span class="bg-custom">Sign Up</span></a></span>
        </nav>
<div style="padding-top: 79px;">
    <div id="another-content">
        <div class="row">
            <div class="col-12 text-center" style="margin-top: 25%">
                <a href="{{route('user.registrationView')}}" class="button" style="text-decoration: none; color: white; font-weight: bold;">JOIN NOW</a>
                <h5 style="font-weight: bold; color: #ffdd00; margin-top: 17px; margin-bottom: 18%; font-size:5vw;">The first ever Esport site in Bangladesh</h5>
            </div>
        </div>
    </div>
    <div id="content-two">
        <p style="margin-top: 31%;"></p>
    </div>
    <div class="container" style="margin-top: 2%;">
        <div class="row">
            <div class="col-12 text-center">
                <p style="color: white; font-size: 3vw;">
                    Play For Money is a online Esport site. You can play your favorite game here and earn money.
                    You need to Sign up our website and there you will see match going on. You have to load money to your account
                    throug bKash, Rocket or Nagad. Then you can join any match you want.
                </p>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 text-center">
            <h3 STYLE="font-weight: bold; color: white; font-size: 6vw;">BATTLE ROYALE</h3>
        </div>
    </div>
    <div class="container mt-5">
        <div class="row">
            <div class="col-4">
                <img src="{{asset('images/slide')}}/daily match.png" class="img-fluid zoom" alt="">
            </div>
            <div class="col-4">
                <img src="{{asset('images/slide')}}/FM.png" class="img-fluid zoom" alt="">
            </div>
            <div class="col-4">
                <img src="{{asset('images/slide')}}/MT.png" class="img-fluid zoom" alt="">
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container" style="margin-top: 7%;">
            <div class="row" style="padding-top: 30px;">
                <div class="col-3 text-center">
                    <a href="https://www.facebook.com/PlayForMoneyP4M" style="color: white"><i class="fab fa-facebook-square fa-2x"></i></a>
                </div>
                <div class="col-3 text-center">
                    <a href="" style="color: white"><i class="fab fa-twitter fa-2x"></i></a>
                </div>
                <div class="col-3 text-center">
                    <a href="https://www.youtube.com/channel/UC2O-PK11Ao3llIdZLQzqA-A?fbclid=IwAR2sMzuRJC_wl_Hl_l_QNiBJNbXWQeMtLew2RRMcUSWUpGsN3sMhGPNE6cY" style="color: white"><i class="fab fa-youtube fa-2x"></i></a>
                </div>
                <div class="col-3 text-center">
                    <a href="https://www.instagram.com/playformoney_p4m/?fbclid=IwAR2xS6nl2T-J3nK4oTT3EOFhLvIaBUwWUIYVFQcZv4wZczGpVlpfeW7j5JA" style="color: white"><i class="fab fa-instagram fa-2x"></i></a>
                </div>
            </div>
        </div>
        <hr>
        <div>
            <row>
                <div class="col-12 text-center">
                    <img src="{{asset('images/icons')}}/P$M.png" alt="" style="max-height: 40px; max-width: 40px;">
                    <p style="margin-bottom: 0px;color: gainsboro; font-size: 10px;">COPYRIGHT &copy;2020 PLAY FOR MONEY</p>
                    <p style="color: gainsboro; font-size: 10px; margin-bottom: 0px; padding-bottom: 10px;">ALL RIGHTS RESERVED</p>
                </div>
            </row>
        </div>
    </div>
</div>


</body>
</html>
