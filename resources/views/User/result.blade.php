@extends('Layout.user-layout')
@section('title')
    Profile
@endsection
@section('container')
    <style>
        .bg-yellow{
            background-color: #f5c72f;
        }
        .table td, .table th {
            border-top: 0px;
        }
        .white-text{
            color: white;
        }
    </style>
    <div class="play-wraper mt-5">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="row">
                    <div class="col-12 pt-3 text-center bg-white">
                        <h6><strong>Solo Evening #112(Mobile)</strong></h6>
                        <p>Organized on</p>
                    </div>
                </div>
                <div class="row mt-3 pt-3 pb-3 bg-white">
                    <div class="col-4 p-0 text-center">
                        <p>Win Prize</p>
                        <strong>100</strong>
                    </div>
                    <div class="col-4 p-0 text-center">
                        <p>Per Kill</p>
                        <strong>10</strong>
                    </div>
                    <div class="col-4 p-0 text-center">
                        <p>Entry Fee</p>
                        <strong>20</strong>
                    </div>
                </div>
                <div class="row mt-3 bg-yellow">
                    <div class="col-12 pt-1 pb-1 text-center">
                        <strong>WINNER OF THE MATCH</strong>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12 p-0 mt-2">
                        <table class="table table-light text-center">
                            <thead class="thead-dark border-0">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Player Name</th>
                                <th scope="col">Kills</th>
                                <th scope="col">Winning</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>bfsfdhk</td>
                                <td>7</td>
                                <td>130</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row mt-2 bg-yellow">
                    <div class="col-12 pt-1 pb-1 text-center">
                        <strong>FULL RESULT</strong>
                    </div>
                </div>
                <div class="row mt-2">
                    <div class="col-12 p-0 mt-2">
                        <table class="table table-light text-center">
                            <thead class="thead-dark border-0">
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Player Name</th>
                                <th scope="col">Kills</th>
                                <th scope="col">Winning</th>
                            </tr>
                            </thead>
                            <tbody>
                            @for($i=1;$i<100;$i++)
                                <tr>
                                    <th scope="row">{{$i}}</th>
                                    <td>bfsfdhk</td>
                                    <td>7</td>
                                    <td>130</td>
                                </tr>
                            @endfor
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
