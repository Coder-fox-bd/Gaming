@extends('Layout.user-layout')
@section('css')
    <link rel="stylesheet" href="{{asset('css')}}/style.css">
@endsection
@section('title')
    Transaction
@endsection
@section('container')
    <style>
        body {
            background: #ffd89b;
            background: -webkit-linear-gradient(to right, #ffd89b, #19547b);
            background: linear-gradient(to right, #ffd89b, #19547b);
            min-height: 100vh;
        }
        .half-bg-black{
            background-color: black;
            min-height: 35vh;
        }
        html { font-size: .90rem; }

        @media (min-width: 576px) {
            html { font-size: 1rem; }
        }
        @media (min-width: 768px) {
            html { font-size: 1rem; }
        }
        @media (min-width: 992px) {
            html { font-size: 1rem; }
        }
        @media (min-width: 1200px) {
            html { font-size: 1rem; }
        }

        /* Tabs*/
        #tabs{
            background: white;
            color: black;
        }

        #tabs .nav-tabs .nav-link.active {
            color: #ae0707;
            background-color: transparent;
            border-color: transparent transparent #f3f3f3;
            border-bottom: 4px solid !important;
            font-weight: bold;
        }
        #tabs .nav-tabs .nav-link {
            border: 1px solid transparent;
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem;
            color: black;
        }
        .gold{
            color: #b88c00;
        }
        .instraction{
            background-color: black;
            padding: 10px 15px;
        }
        .card{
           box-shadow: 1px 2px 3px 1px rgba(109, 109, 142, 0.22);
        }
        a:hover {
            text-decoration: none;
        }
        .rounded-button{
            border-radius: 7px;
            background: #f2f2f2;
            padding: 3px;
            box-shadow: 2px 3px 2px 1px rgba(109, 109, 142, 0.22);
        }
    </style>
    <div class="play-wraper mt-0">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 bg-white">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 half-bg-black p-0">
                        <div class="row">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-xl-1 col-lg-2 col-md-2 col-sm-2 col-2">
                                        <a href="{{route('user.profileView')}}" class="ml-2" style="color: white"><i class="fas fa-arrow-left fa-2x"></i></a>
                                    </div>
                                    <div class="col-10 p-0">
                                        <p style="color: white; font-size: 20px; font-weight: bold;">My Wallet</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin-top: 18%">
                            <div class="col-12 text-center">
                                <i class="fas fa-coins fa-3x gold"><span style="color: white">300</span></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row bg-white">
                    <div class="container mt-3 p-0">
                        <div class="col-12 p-0" style="min-height: 60vh;">
                            <!-- Tabs -->
                            <section id="tabs">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-0" >
                                            <nav>
                                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">ADD MONEY</a>
                                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">WITHDRAW</a>
                                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">TRANSACTION</a>
                                                </div>
                                            </nav>
                                            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                    <div class="container">
                                                        <div class="row" style="margin-top: 10%;">
                                                            <div class="col-12 text-center">
                                                                <a class="instraction" onclick="hideShow()" style="color: white;">How to add money?</a>
                                                            </div>
                                                        </div>
                                                        <div id="hidden-div" style="display:none; margin-top: 12px;">
                                                            <div class="row mt-3">
                                                                <div class="col-12 p-0">
                                                                    <img src="{{asset('images')}}/icons/bikash.png" alt="" style="max-height: 40px; max-width: 40px;">
                                                                    <span style="margin-left: 3px; font-size: 16px; font-weight: bold;">01900000000 (Play for Money bKash)</span>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-12 p-0">
                                                                    <img src="{{asset('images')}}/icons/ROCKET.png" alt="" style="max-height: 40px; max-width: 40px;">
                                                                    <span style="margin-left: 3px; font-size: 16px; font-weight: bold;">0190000000000 (Play for Money Rocket)</span>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-12 p-0">
                                                                    <p style="font-weight: bold; font-size: 18px">Follow below steps <i class="fas fa-hand-point-down" style="color: #ffb61e"></i></p>
                                                                    <p style="font-size: 17px; font-weight: bold; margin: 0px;">Step 1:</p>
                                                                    <p style="margin: 0px;">1. Dial *247# or *322#</p>
                                                                    <p style="margin: 0px;">2. Select <strong>Send Money</strong> Option.</p>
                                                                    <p style="margin: 0px;">3. Enter <strong>Play for Money</strong> Personal Account Number.</p>
                                                                    <p style="margin: 0px;">4. Enter Your Amount</p>
                                                                    <p style="margin: 0px;">5. Enter Reference Number 1</p>
                                                                    <p style="margin: 0px;">6. Now Enter your PIN</p>
                                                                    <p>7. Almost Done. Now follow step 2.</p>
                                                                    <p style="font-size: 17px; font-weight: bold; margin: 0px;">Step 2:</p>
                                                                    <p style="margin: 0px;">1. Go to <span style="color: darkred"><strong>www.playformoney.net</strong></span></p>
                                                                    <p style="margin: 0px;">2. Login to your account.</p>
                                                                    <p style="margin: 0px;">3. Go to <span style="color: darkred"><strong>My Wallet</strong></span> and select your mobile banking service(bKash or Rocket).</p>
                                                                    <p style="margin: 0px;">4. Verify your <span style="font-weight: bold; color: darkred">Payment</span> <span style="color: darkred">by entering amount adn your bKash or Rocket Number.</span></p>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-12 text-center p-0">
                                                                    <p style="font-weight: bold; font-size: 15px;">Once Play For Money verify your payment details, Within 2 hours your money will be added.</p>
                                                                </div>
                                                            </div>
                                                            <div class="row mt-3">
                                                                <div class="col-12 text-center p-0">
                                                                    <p style="font-weight: bold; font-size: 15px; margin: 0px;">Chick the link for your Guide</p>
                                                                    <a href="#" class="rounded-button" style="font-size: 24px; font-weight: bold;"><i class="fab fa-youtube" style="color: red"></i><span style="color: black;">YouTube</span></a>

                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row" style="margin-top: 20%;">
                                                            <div class="col-6 text-center">
                                                                <div class="card shadow-lg p-3 rounded" style="background-color: #f2f2f2">
                                                                    <a href="{{route('user.addMoneyView')}}" style="color: black;">
                                                                        <img src="{{asset('images')}}/icons/bikash.png" alt="" style="max-width: 70px; max-height: 70px; padding-top: 10px;">
                                                                        <p style="margin-top: 15px; margin-bottom: 0px;">bKash</p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                            <div class="col-6 text-center">
                                                                <div  class="card shadow-lg p-3 rounded" style="background-color: #f2f2f2">
                                                                    <a href="{{route('user.addRocketMoneyView')}}" style="color: black">
                                                                        <img src="{{asset('images')}}/icons/ROCKET.png" alt="" style="max-width: 70px; max-height: 70px; padding-top: 10px;">
                                                                        <p style="margin-top: 15px; margin-bottom: 0px;">Rocket</p>
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12 text-center">
                                                                <p style="color: #8b3510;">* Mobile Top-up is not applicable for payment</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                                                    Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                                                </div>
                                                <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                                                    Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 p-0 text-center">

                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        function hideShow() {
            var x = document.getElementById("hidden-div");
            if (x.style.display === "none") {
                x.style.display = "block";
            } else {
                x.style.display = "none";
            }
        }
    </script>

@endsection
