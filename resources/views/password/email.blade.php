@extends('Layout.user-layout')
@section('css')
    <link rel="stylesheet" href="{{asset('css')}}/style.css">
@endsection
@section('title')
    Email
@endsection
@section('container')
    <div class="col-sm-8 offset-sm-2">
        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <h1>Forgot Password</h1>
        <form method="POST" action="/password/email">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="email">E-mail</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
            </div>
            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
            <button type="submit" class="btn btn-primary">Send Password Reset Link</button>
        </form>
    </div>
@endsection
