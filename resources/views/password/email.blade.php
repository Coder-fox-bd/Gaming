@extends('Layout.user-layout')
@section('css')
    <link rel="stylesheet" href="{{asset('css')}}/style.css">
@endsection
@section('title')
    Email
@endsection
@section('container')
    <div class="col-sm-8 offset-sm-2">
        <h1>Forgot Password</h1>
        <form method="POST" action="/password-reminder">
            @csrf
            <div class="form-group">
                <label for="email">E-mail</label>
                @if (session('message'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('message') }}
                    </div>
                @endif
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
            </div>
{{--            @if($danger)--}}
{{--            <span class="invalid-feedback" role="alert">--}}
{{--                <strong>{{ $danger }}</strong>--}}
{{--            </span>--}}
{{--            @endif--}}
            <button type="submit" class="btn btn-primary">Send Password Reset Link</button>
        </form>
    </div>
@endsection
