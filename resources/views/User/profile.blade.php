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
                background: black;
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
            .card{
                background-color: #2095f3;
                margin-bottom: 0px;
            }
            .button {
                background-color: #2095f3;
                border: none;
                color: white;
                padding: 15px 32px;
                text-align: center;
                text-decoration: none;
                display: inline-block;
                border-radius: .25rem;
            }
        </style>
      <div class="play-wraper mt-0">
          <div class="row">
              <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12" style="margin-top: 13%;">
                  <div class="row bg-white" style="border-radius: .25rem;">
                      <div class="col-6" style="margin-top: 10%;">
                          <img alt="100x100" width="130" height="150" src="{{asset('images/icons')}}/profile.png">
                      </div>
                      <div class="col-6 text-center" style="margin-top: 21%;">
                          <button class="button"><h6>{{$users->user_first_name}} {{$users->user_last_name}}</h6></button>
                          @if($balance)
                              <h6>Balance Tk.{{$balance->balance_amount}}</h6>
                          @else
                              <h6>Balance Tk.00</h6>
                          @endif
                      </div>
                  </div>

                  <div class="row">
                      <div class="col-md-12 p-0 mt-3">
                          <div class="card">
                              <div class="card-body">
                                  <div class="row">
                                      <div class="col-3 text-center" style="color: white;">
                                          @if($kills!==null)
                                              <strong>{{$kills->total_match}}</strong>
                                              <p class="small-font">Matches Played</p>
                                          @else
                                              <strong>00</strong>
                                              <p class="small-font">Matches Played</p>
                                          @endif
                                      </div>
                                      <div class="topbar-divider d-none d-sm-block"></div>
                                      <div class="col-3 text-center" style="color: white;">
                                          @if($kills!==null)
                                              <strong>{{$kills->kills}}</strong>
                                              <p class="small-font">Total Kill</p>
                                          @else
                                              <strong>00</strong>
                                              <p class="small-font">Total Kill</p>
                                          @endif
                                      </div>
                                      <div class="topbar-divider d-none d-sm-block"></div>
                                      <div class="col-3 text-center" style="color: white;">
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


                  <div class="row mt-3">
                      <div class="col-12 p-0">
                          <table class="table bg-white">
                              <tbody>
                              <tr onclick="location.href='{{route('user.transactionView')}}';" style="cursor: pointer;">
                                  <th scope="row" width="10%"><i class="fas fa-wallet"></i></th>
                                  <td>My Wallet</td>
                                  <td width="10%"><a href="{{route('user.transactionView')}}"><i class="fas fa-chevron-right"></i></a></td>
                              </tr>
                              <tr onclick="location.href='https://www.facebook.com/sharer/sharer.php?u=https://www.facebook.com/PlayForMoneyP4M/.com&display=popup';" style="cursor: pointer;">
                                  <th scope="row" width="10%"><i class="fas fa-share-alt"></i></th>
                                  <td>Share</td>
                                  <td width="10%"><a href="https://www.facebook.com/sharer/sharer.php?u=https://www.facebook.com/PlayForMoneyP4M/.com&display=popup"><i class="fas fa-chevron-right"></i></a></td>
                              </tr>
                              <tr data-toggle="modal" data-target="#exampleModal" style="cursor: pointer;">
                                  <th scope="row" width="10%"><i class="fas fa-headset"></i></th>
                                  <td>Support</td>
                                  <td width="10%"><a style="color:#007bff;"><i class="fas fa-chevron-right"></i></a></td>

                              </tr>
                              <tr onclick="location.href='{{route('user.logout')}}';" style="cursor: pointer;">
                                  <th scope="row" width="10%"><i class="fas fa-sign-out-alt"></i></th>
                                  <td>Logout</td>
                                  <td width="10%"><a href="{{route('user.logout')}}"><i class="fas fa-chevron-right"></i></a></td>
                              </tr>
                              </tbody>
                          </table>
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
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p>If you need any help please send us message through <a href="https://www.facebook.com/PlayForMoneyP4M">Facebook</a> or drop an email on <strong>support@playformoney.net</strong>. One of our team member will reach you as soon as possible.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
