@extends('Layout.user-layout')
@section('title')
    Result
@endsection
@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
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

                <div class="row mt-2 bg-yellow">
                    <div class="col-12 pt-1 pb-1 text-center">
                        <strong>RESULTS</strong>
                    </div>
                </div>

                @php
                    $i =0;
                @endphp
                @foreach($matchs as $match)
                    @php
                        $i++;
                    @endphp
                    <div class="row mt-3 pt-3 pb-3 bg-yellow">
                        <div class="col-4 p-0 text-center">
                            <p>{{$match->match_date}}</p>
                        </div>
                        <div class="col-4 p-0 text-center">
                            <p>{{$match->match_time}}</p>
                        </div>
                        <div class="col-4 p-0 text-center">
                            <input type="hidden" id="value{{$i}}" value="{{$match->store_match_id}}">
                            <button class="bnt btn-primary" id="search{{$i}}">
                                Show
                            </button>
                        </div>
                    </div>
                    <div id="result{{$i}}">

                    </div>
                    <script type="text/javascript">
                        $('#search{{$i}}').click(function(){
                            $value=$('#value{{$i}}').val();
                            $("#result{{$i}}").toggle('show');
                            $.ajax({
                                type : 'get',
                                url : '{{ route('user.searchResult') }}',
                                headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                                data:{'search':$value},
                                success:function(data){
                                    console.log(data);
                                    $('#result{{$i}}').html(data);
                                }
                            });
                        })
                        jQuery(document).ready(function(){
                            jQuery('#search{{$i}}').on('click', function(event) {
                                jQuery('result{{$i}}').toggle('show');
                            });
                        });
                    </script>
                @endforeach







{{--                <div class="row">--}}
{{--                    <div class="col-12 pt-3 text-center bg-white">--}}
{{--                        <h6><strong>Solo Evening #112(Mobile)</strong></h6>--}}
{{--                        <p>Organized on</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row mt-3 pt-3 pb-3 bg-white">--}}
{{--                    <div class="col-4 p-0 text-center">--}}
{{--                        <p>Win Prize</p>--}}
{{--                        <strong>100</strong>--}}
{{--                    </div>--}}
{{--                    <div class="col-4 p-0 text-center">--}}
{{--                        <p>Per Kill</p>--}}
{{--                        <strong>10</strong>--}}
{{--                    </div>--}}
{{--                    <div class="col-4 p-0 text-center">--}}
{{--                        <p>Entry Fee</p>--}}
{{--                        <strong>20</strong>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row mt-3 bg-yellow">--}}
{{--                    <div class="col-12 pt-1 pb-1 text-center">--}}
{{--                        <strong>WINNER OF THE MATCH</strong>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row mt-2">--}}
{{--                    <div class="col-12 p-0 mt-2">--}}
{{--                        <table class="table table-light text-center">--}}
{{--                            <thead class="thead-dark border-0">--}}
{{--                            <tr>--}}
{{--                                <th scope="col">#</th>--}}
{{--                                <th scope="col">Player Name</th>--}}
{{--                                <th scope="col">Kills</th>--}}
{{--                                <th scope="col">Winning</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                            <tr>--}}
{{--                                <th scope="row">1</th>--}}
{{--                                <td>bfsfdhk</td>--}}
{{--                                <td>7</td>--}}
{{--                                <td>130</td>--}}
{{--                            </tr>--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row mt-2 bg-yellow">--}}
{{--                    <div class="col-12 pt-1 pb-1 text-center">--}}
{{--                        <strong>FULL RESULT</strong>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="row mt-2">--}}
{{--                    <div class="col-12 p-0 mt-2">--}}
{{--                        <table class="table table-light text-center">--}}
{{--                            <thead class="thead-dark border-0">--}}
{{--                            <tr>--}}
{{--                                <th scope="col">#</th>--}}
{{--                                <th scope="col">Player Name</th>--}}
{{--                                <th scope="col">Kills</th>--}}
{{--                                <th scope="col">Winning</th>--}}
{{--                            </tr>--}}
{{--                            </thead>--}}
{{--                            <tbody>--}}
{{--                                <tr>--}}
{{--                                    <th scope="row"></th>--}}
{{--                                    <td>bfsfdhk</td>--}}
{{--                                    <td>7</td>--}}
{{--                                    <td>130</td>--}}
{{--                                </tr>--}}
{{--                            </tbody>--}}
{{--                        </table>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
        </div>
    </div>



@endsection
