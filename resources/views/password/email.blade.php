<!DOCTYPE html>
<html lang="en">
<head>
    <title>Reset Password</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--===============================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{asset('vendor')}}/bootstrap/css/bootstrap.min.css">
    <!--===============================================================================================-->
</head>
<body>
<style>
    .vertical-center {
        margin: 0;
        position: absolute;
        top: 50%;
        -ms-transform: translateY(-50%);
        transform: translateY(-50%);
    }
</style>

    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 vertical-center">
                <h1>Forgot Password</h1>
                <form method="POST" action="/password-reminder">
                    @csrf
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        @if(session('message'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Woops !</strong> {{session('message')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        @if(session('message1'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{session('message1')}}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email">
                    </div>
                    <button type="submit" class="btn btn-primary">Send Password Reset Code</button>
                </form>
            </div>
        </div>
    </div>

<!--===============================================================================================-->
<script src="{{asset('vendor')}}/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
<!--===============================================================================================-->
<script src="{{asset('vendor')}}/bootstrap/js/popper.js"></script>
<script src="{{asset('vendor')}}/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
<script>
    $(document).ready(function(){
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>
</body>
</html>
