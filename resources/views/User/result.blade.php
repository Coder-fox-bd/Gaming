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
                                beforeSend : function() {
                                    var spinner_html = '';
                                    spinner_html += '<div class="card">';
                                    spinner_html += '<div class="card-header">';
                                    spinner_html += '<label>Student List</label>';
                                    spinner_html += '</div>';

                                    spinner_html += '<div class="card-body text-center">';

                                    spinner_html += '<div class="spinner-border text-info" role="status">';
                                    spinner_html += '<span class="sr-only">Loading...</span>';
                                    spinner_html += '</div>';
                                    spinner_html += '</div>';
                                    spinner_html += '</div>';
                                    spinner_html += '<div>';

                                    $("#student_search_result").html(spinner_html);
                                },
                                success:function(data){
                                    $('#result{{$i}}').html(data);
                                }
                            });
                        })
                    </script>
                @endforeach
            </div>
        </div>
    </div>



@endsection
