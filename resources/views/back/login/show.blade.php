<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ config('app.name') }}</title>
    <link rel="stylesheet" href="{{url('public/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{url('public/admin-lte/plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{url('public/admin-lte/dist/css/adminlte.min.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
    {{--<link rel="stylesheet" href="{{ url('public/css/back/app.css') }}">--}}
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <h1>Admin Login</h1>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>
            @include('back.includes.messages')

            {{ Form::open(['method' => 'post','action' => 'Back\LoginController@login']) }}
                <div class="input-group mb-3">
                    {{--{{ Form::label('email') }}--}}
                    {{--<input type="email" class="form-control" placeholder="Email">--}}
                    {{Form::email('email',null,['class' => 'form-control','placeholder'=>'Email', 'required'])}}
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>

            <div class="input-group mb-3">
                <input type="password" name="password" class="form-control" placeholder="Password" required>
                <div class="input-group-append">
                    <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                    <!-- /.col -->
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            {{Form::close()}}
        </div>
        <!-- /.login-card-body -->
</div>
<script src="{{url('public/admin-lte/plugins/jquery/jquery.min.js')}}"></script>
<script src="{{url('public/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{url('public/admin-lte/dist/js/adminlte.min.js')}}"></script>
<script type="text/javascript" src="{{ url('public/js/back/app.js') }}"></script>
</body>
</html>
