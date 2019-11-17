@extends('Layout.admin-layout')
@section('css')
    <link rel="stylesheet" href="{{asset('css')}}/style.css">
@endsection
@section('title')
    Users
@endsection
@section('container')
    <style>
        .form-control:focus {
            box-shadow: none;
        }


        body {
            background: #ffd89b;
            background: -webkit-linear-gradient(to right, #ffd89b, #19547b);
            background: linear-gradient(to right, #ffd89b, #19547b);
            min-height: 100vh;
        }

        .form-control::placeholder {
            font-size: 0.95rem;
            color: #aaa;
            font-style: italic;
        }
    </style>
    <div class="play-wraper">
        <div class="row">
            <div class="col-12 p-0">
                @if(session('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Congrats !</strong> {{session('message')}}.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
                @if(session('message2'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Oops !</strong> {{session('message2')}}.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 p-0">
                <form action="/p4m.admin.login/users" method="get">
                    <div class="p-1 bg-light rounded rounded-pill shadow-sm mb-4">
                        <div class="input-group">
                            <input type="search" name="user_username" placeholder="Search by the username" aria-describedby="button-addon1" class="form-control border-0 bg-light">
                            <div class="input-group-append">
                                <button id="button-addon1" type="submit" class="btn btn-link text-primary"><i class="fa fa-search"></i></button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="row mt-2">
            <div class="col-12 p-0 mt-2">
                <table class="table table-light text-center">
                    <thead class="thead-dark border-0">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Player Name</th>
                        <th scope="col">Username</th>
                        <th scope="col">Add Balance</th>
                        <th scope="col">Delete</th>
                    </tr>
                    </thead>
                    <tbody>
                    @if($searched_user)
                        <tr>
                            <th scope="row">1</th>
                            <td>{{$searched_user->user_first_name}} {{$searched_user->user_last_name}}</td>
                            <td>{{$searched_user->user_username}}</td>
                            <td><a data-toggle="modal" data-target="#exampleModalCenter"><i class="fas fa-money-bill"></i></a></td>
                            <td><a href="" style="color: red"><i class="fas fa-trash"></i></a></td>
                        </tr>
                    @else
                        <div class="text-center">
                            <h6 class="red-font">No Data Available</h6>
                        </div>
                    @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header text-center bg-dark">
                    <h5 class="modal-title" id="exampleModalLongTitle">Enter Amount</h5>
                </div>
                <div class="modal-body">
                    <form action="/p4m.admin.login/users" method="POST">
                        @csrf
                        <input type="text" name="amount" placeholder="Amount" required>
                        <input type="password" name="password" placeholder="Confirm your Password" required>
                        @if($searched_user)
                            <input type="hidden" name="user_id" value="{{$searched_user->user_id}}">
                        @endif
                        <div class="row">
                            <div class="col-12 text-center">
                                <button type="button" class="btn btn-secondary btn-resize" style="font-size: 15px;" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary btn-resize" style="font-size: 15px;">Add Balance</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
