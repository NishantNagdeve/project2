<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V6</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="{{ asset('asset/login/images/icons/favicon.ico') }}"/>
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/login/vendor/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/login/fonts/iconic/css/material-design-iconic-font.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/login/vendor/animate/animate.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/login/vendor/css-hamburgers/hamburgers.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/login/vendor/animsition/css/animsition.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/login/vendor/select2/select2.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/login/vendor/daterangepicker/daterangepicker.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/login/css/util.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('asset/login/css/main.css') }}">
</head>
<body>
        <div class="limiter">
            <div class="container-login100">
                <div class="wrap-login100 p-t-85 p-b-20">
                    <div>
                        @if(Session::get('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{Session::get('status')}}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                        </div >
                        @endif
                    </div>
                    <form class="login100-form validate-form" method="post" action="login" enctype="multipart/form-data">
                    @csrf
                        <span class="login100-form-avatar">
                            <img src="{{asset('asset/login/images/avatar-01.jpg')}}" alt="AVATAR">
                        </span>
                        <div class="wrap-input100 validate-input m-t-35 m-b-35" data-validate = "Enter Email">
                            <input class="input100" type="email" required name="email">
                            <span class="focus-input100" data-placeholder="Email"></span>
                            @error('email')
                            <p style="color:red;">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
                            <input class="input100" type="password" required name="password">
                            <span class="focus-input100" data-placeholder="Password"></span>
                            @error('password')
                            <p style="color:red;">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="container-login100-form-btn">
                            <button class="login100-form-btn">
                                Login
                            </button>
                        </div>
                        <div class="container-login100-form-btn m-t-20">
                            <a href="/register" class="login100-form-btn">
                                Register
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>

	<div id="dropDownSelect1"></div>
	<script src="{{ asset('asset/login/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
	<script src="{{ asset('asset/login/vendor/animsition/js/animsition.min.js') }}"></script>
	<script src="{{ asset('asset/login/vendor/bootstrap/js/popper.js') }}"></script>
	<script src="{{ asset('asset/login/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
	<script src="{{ asset('asset/login/vendor/select2/select2.min.js') }}"></script>
	<script src="{{ asset('asset/login/vendor/daterangepicker/moment.min.js') }}"></script>
	<script src="{{ asset('asset/login/vendor/daterangepicker/daterangepicker.js') }}"></script>
	<script src="{{ asset('asset/login/vendor/countdowntime/countdowntime.js') }}"></script>
	<script src="{{ asset('asset/login/js/main.js') }}"></script>
</body>
</html>