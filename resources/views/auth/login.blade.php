

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:46 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Administration Login</title>

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="public/admin/assets/img/favicon.png">
    <script src="https://kit.fontawesome.com/f7695f2d09.js" crossorigin="anonymous"></script>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/bootstrap.min.css') }}">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/font-awesome.min.css') }}">

    <!-- Main CSS -->
    <link rel="stylesheet" href="{{asset('admin/assets/css/style.css') }}">

    <!--[if lt IE 9]>
    <script src="public/admin/assets/js/html5shiv.min.js"></script>
    <script src="public/admin/assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>

<!-- Main Wrapper -->
<div class="main-wrapper login-body">
    <div class="login-wrapper">
        <div class="container">
            <div class="loginbox">
                <div class="login-left">
                    <img class="img-fluid" src="{{ URL::to('/') }}/admin/assets/img/logo-white.png" alt="Logo">
                </div>
                <div class="login-right">
                    <div class="login-right-wrap">
                        <h1>Login</h1>
                        <p class="account-subtitle">Access to  dashboard</p>
                        @if($errors -> any())

                            <p class="alert alert-danger"> {{$errors -> first()}} <button class="close" data-dismiss="alert">&times;</button></p>

                    @endif

                        <!-- Form -->
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <input class="form-control" type="text" name="email" value="{{ old('email') }}" placeholder="Email">

                            </div>
                            <div class="form-group">
                                <input class="form-control" name="password" type="password" placeholder="Password">

                            </div>
                            <div class="form-group">
                                <button class="btn btn-primary btn-block" type="submit">Login</button>
                            </div>
                        </form>
                        <!-- /Form -->

                        {{-- <div class="text-center forgotpass"><a href="{{route('password.request')}}">Forgot Password?</a></div> --}}
                        <div class="login-or">
                            <span class="or-line"></span>
                            <span class="span-or">or</span>
                        </div>

                        <!-- Social Login -->
                        <div class="social-login">
                            <span>Login with</span>
                            <a href="#" class="facebook"><i class="fa fa-facebook"></i></a><a href="#" class="google"><i class="fa fa-google"></i></a>
                        </div>
                        <!-- /Social Login -->

                        {{-- <div class="text-center dont-have">Don’t have an account? <a href="{{route('register')}}">Register</a></div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /Main Wrapper -->

<!-- jQuery -->
<script src="{{asset('admin/assets/js/jquery-3.2.1.min.js') }}"></script>


<!-- Bootstrap Core JS -->
<script src="{{asset('admin/assets/js/popper.min.js') }}"></script>
<script src="{{asset('admin/assets/js/bootstrap.min.js') }}"></script>

<!-- Custom JS -->
<script src="{{asset('admin/assets/js/script.js') }}"></script>

</body>

<!-- Mirrored from dreamguys.co.in/demo/doccure/admin/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 30 Nov 2019 04:12:46 GMT -->
</html>






