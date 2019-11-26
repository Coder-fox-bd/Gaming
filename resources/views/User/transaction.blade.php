@extends('Layout.user-layout')
@section('css')
    <link rel="stylesheet" href="{{asset('css')}}/style.css">
@endsection
@section('title')
    Transaction
@endsection
@section('container')
    <style>
        body{
            background-color: black;
        }
        .half-bg-black{
            background-color: black;
            min-height: 35vh;
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
            font-size: 20px;
            font-weight: bold;
        }
        #tabs .nav-tabs .nav-link {
            border: 1px solid transparent;
            border-top-left-radius: .25rem;
            border-top-right-radius: .25rem;
            color: black;
            font-size: 20px;
        }
        .gold{
            color: #b88c00;
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
                    <div class="container mt-3">
                        <!-- Tabs -->
                        <section id="tabs">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 ">
                                        <nav>
                                            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Home</a>
                                                <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
                                                <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">Contact</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                                Et et consectetur ipsum labore excepteur est proident excepteur ad velit occaecat qui minim occaecat veniam. Fugiat veniam incididunt anim aliqua enim pariatur veniam sunt est aute sit dolor anim. Velit non irure adipisicing aliqua ullamco irure incididunt irure non esse consectetur nostrud minim non minim occaecat. Amet duis do nisi duis veniam non est eiusmod tempor incididunt tempor dolor ipsum in qui sit. Exercitation mollit sit culpa nisi culpa non adipisicing reprehenderit do dolore. Duis reprehenderit occaecat anim ullamco ad duis occaecat ex.
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
                <div class="row">
                    <div class="col-12 p-0 text-center">

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
