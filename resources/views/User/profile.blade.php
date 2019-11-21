@extends('Layout.user-layout')
@section('css')
    <link rel="stylesheet" href="{{asset('css')}}/style.css">
@endsection
@section('title')
    Profile
@endsection
@section('container')
    <style>
        body{
            background-color: black;
        }
        .half-bg-white{
            background-image: linear-gradient(#000 50%, #ffffff 0%);
            min-height: 40vh;
        }
        .topbar-divider {
            width: 0;
            border-right: 1px solid
            #e3e6f0;
            height: calc(4.375rem - 2rem);
            margin: auto 1rem;
        }
        .d-sm-block {
            display: block !important;
        }
        .small-font{
            font-size: 12px;
        }
        .rounded-btn{/*dent around button*/
            display: inline-block;
            position: relative;
            text-decoration: none;
            color: rgba(3, 169, 244, 0.54);
            width: 60px;
            height: 60px;
            border-radius: 50%;
            text-align: center;
            background: #f7f7f7;
            box-shadow: inset 0 0 4px rgba(0, 0, 0, 0.08);
        }
        .rounded-btn .fa {/*Button itself*/
            position: absolute;
            content: '';
            width: 40px;
            height: 40px;
            line-height: 40px;
            vertical-align: middle;
            left: 10px;
            top: 9px;
            border-radius: 50%;
            font-size: 15px;
            background-image: -webkit-linear-gradient(#e8e8e8 0%, #d6d6d6 100%);
            background-image: linear-gradient(#e8e8e8 0%, #d6d6d6 100%);
            text-shadow: 1px 1px 1px rgba(255, 255, 255, 0.66);
            box-shadow: inset 0 2px 0 rgba(255,255,255,0.5), 0 2px 2px rgba(0, 0, 0, 0.19);
            border-bottom: solid 2px #b5b5b5;
        }

        .rounded-btn .fa:active{
            background-image: -webkit-linear-gradient(#efefef 0%, #d6d6d6 100%);
            box-shadow: inset 0 1px 0 rgba(255,255,255,0.5), 0 2px 2px rgba(0, 0, 0, 0.19);
            border-bottom: solid 2px #d8d8d8;
        }
    </style>
  <div class="play-wraper mt-0">
      <div class="row">
          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 bg-white">
              <div class="row">
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 text-center half-bg-white">
                      <div class="container my-4">
                          <!--Grid row-->
                          <div class="row">
                              <!--Grid column-->
                              <div class="col-md-12 mb-4">
                                  <img class="rounded-circle" alt="100x100" width="130" height="150" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ84QCzDFx7xHu10V3F4HtgnCqDbGXYSlzAXQlCTygqiD9aY_mB&s"
                                       data-holder-rendered="true" id="image">
                                  <h6>{{$users->user_first_name}} {{$users->user_last_name}}</h6>
                                  @if($balance)
                                      <h6>Balance Tk.{{$balance->balance_amount}}</h6>
                                  @else
                                      <h6>Balance Tk.00</h6>
                                  @endif
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-12 p-0">
                      <div class="card">
                          <div class="card-body">
                              <div class="row">
                                  <div class="col-3 p-0 text-center">
                                      <strong>{{$kills->total_match}}</strong>
                                      <p class="small-font">Matches Played</p>
                                  </div>
                                  <div class="topbar-divider d-none d-sm-block"></div>
                                  <div class="col-3 p-0 text-center">
                                      <strong>{{$kills->kills}}</strong>
                                      <p class="small-font">Total Kill</p>
                                  </div>
                                  <div class="topbar-divider d-none d-sm-block"></div>
                                  <div class="col-3 p-0 text-center">
                                      <strong>{{$earns->total_earn_amount}}</strong>
                                      <p class="small-font">Amount Won</p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="row mt-5 bg-white">
                  <div class="col-4 text-center">
                      <a href="#" class="rounded-btn" data-toggle="modal" data-target="#exampleModalCenter"><i class="fa fa-wallet"></i></a>
                      <p>Withdrow</p>
                  </div>
                  <div class="col-4 text-center">
                      <a href="#" class="rounded-btn">
                          <i class="fa fa-share-alt"></i>
                      </a>
                      <p>Share</p>
                  </div>
                  <div class="col-4 text-center">
                      <a href="#" class="rounded-btn">
                          <i class="fa fa-concierge-bell"></i>
                      </a>
                      <p>Support</p>
                  </div>
              </div>
              <div class="row">
                  <div class="col-12 text-center">
                      <a href="{{route('user.logout')}}" class="rounded-btn">
                          <i class="fa fa-power-off"></i>
                      </a>
                      <p>Logout</p>
                  </div>
              </div>
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
                    <form action="#" method="POST">
                        @csrf
                        <input type="text" name="amount" placeholder="Amount">
                        <input type="password" name="password" placeholder="Confirm your Password">
                        <div class="row">
                            <div class="col-12 text-center">
                                <button type="button" class="btn btn-secondary btn-resize" style="font-size: 15px;" data-dismiss="modal">Cancel</button>
                                <button type="submit" class="btn btn-primary btn-resize" style="font-size: 15px;">Withdraw</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
