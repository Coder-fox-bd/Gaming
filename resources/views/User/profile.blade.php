@extends('Layout.user-layout')
@section('css')
    <link rel="stylesheet" href="{{asset('css')}}/style.css">
@endsection
@section('title')
    Profile
@endsection
@section('container')
        <style>
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
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 bg-white" style="margin-top: 13%;">
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
                                          @if($kills!==null)
                                              <strong>{{$kills->total_match}}</strong>
                                              <p class="small-font">Matches Played</p>
                                          @else
                                              <strong>00</strong>
                                              <p class="small-font">Matches Played</p>
                                          @endif
                                      </div>
                                      <div class="topbar-divider d-none d-sm-block"></div>
                                      <div class="col-3 p-0 text-center">
                                          @if($kills!==null)
                                              <strong>{{$kills->kills}}</strong>
                                              <p class="small-font">Total Kill</p>
                                          @else
                                              <strong>00</strong>
                                              <p class="small-font">Total Kill</p>
                                          @endif
                                      </div>
                                      <div class="topbar-divider d-none d-sm-block"></div>
                                      <div class="col-3 p-0 text-center">
                                          @if($earns!==null)
                                              <strong>{{$earns->total_earn_amount}}</strong>
                                              <p class="small-font">Amount Won</p>
                                          @else
                                              <strong>00</strong>
                                              <p class="small-font">Amount Won</p>
                                          @endif
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="row mt-5 bg-white">
                      <div class="col-4 text-center">
                          <a href="{{route('user.transactionView')}}" class="rounded-btn"><i class="fa fa-wallet"></i></a>
                          <p>My Wallet</p>
                      </div>
                      <div class="col-4 text-center">
                          <a href="https://www.facebook.com/sharer/sharer.php?u=https://www.facebook.com/PlayForMoneyP4M/.com&display=popup" class="rounded-btn">
                              <i class="fa fa-share-alt"></i>
                          </a>
                          <p>Share</p>
                      </div>
                      <div class="col-4 text-center">
                          <a class="rounded-btn" data-toggle="modal" data-target="#exampleModal" style="color: rgba(3, 169, 244, 0.54); cursor: pointer;">
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
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                </div>
            </div>
        </div>
    </div>

@endsection
