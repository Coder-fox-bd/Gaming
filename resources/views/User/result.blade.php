@extends('Layout.user-layout')
@section('title')
    Result
@endsection
@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
@endsection
@section('container')
    <style>
        body{
            background: white;
        }
        .bg-yellow{
            background-color: #f5c72f;
        }
        .table td, .table th {
            border-top: 0px;
        }
        .white-text{
            color: white;
        }
        .loader {
            border: 5px solid #f3f3f3; /* Light grey */
            border-top: 5px solid #555; /* black */
            border-radius: 50%;
            width: 50px;
            height: 50px;
            animation: spin 1s linear infinite;
        }

        @keyframes spin {
            0% { transform: rotate(0deg); }
            100% { transform: rotate(360deg); }
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
                    $i=0;
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
{{--                    <div class="row" id="loader{{$i}}" style="display: none">--}}
{{--                        <div class="col-5">--}}

{{--                        </div>--}}
{{--                        <div class="col-7">--}}
{{--                            <div class="loader"></div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
                    <div id="result{{$i}}">

                    </div>
                    <script type="text/javascript">
                        $(document).ready(function() {
                            $('#search{{$i}}').click(function(){
                                $value=$('#value{{$i}}').val();
                                $("#result{{$i}}").toggle('show');
                                $.ajax({
                                    type : 'get',
                                    url : '{{ route('user.searchResult') }}',
                                    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')},
                                    data:{'search':$value},
                                    success:function(data){
                                        $('#result{{$i}}').html(data);
                                    },
                                });
                            });
                        });
                    </script>
                @endforeach
            </div>
        </div>
    </div>



@endsection
