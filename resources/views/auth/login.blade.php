{{-- @extends('dashboard.layouts.layout_dashboard') --}}

{{-- @section('content') --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="shortcut icon" type="image/png" href="{{asset('assets-dashboard/images/icon/favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('assets-dashboard/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets-dashboard/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets-dashboard/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('assets-dashboard/css/metisMenu.css')}}">
    <link rel="stylesheet" href="{{asset('assets-dashboard/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets-dashboard/css/slicknav.min.css')}}">
    <!-- amchart css -->
    <link rel="stylesheet" href="https://www.amcharts.com/lib/3/plugins/export/export.css" type="text/css" media="all" />
    <!-- others css -->
    <link rel="stylesheet" href="{{asset('assets-dashboard/css/typography.css')}}">
    <link rel="stylesheet" href="{{asset('assets-dashboard/css/default-css.css')}}">
    <link rel="stylesheet" href="{{asset('assets-dashboard/css/styles.css')}}">
    <link rel="stylesheet" href="{{asset('assets-dashboard/css/responsive.css')}}">
    <!-- modernizr css -->
    <script src="{{asset('assets-dashboard/js/vendor/modernizr-2.8.3.min.js')}}"></script>

</head>
<body>

    {{-- <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Login') }}</div>
    
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
    
                            <div class="row mb-3">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
    
                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
    
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
    
                                <div class="col-md-6">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
    
                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
    
                            <div class="row mb-3">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
    
                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>
    
                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>
    
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}

     <!-- preloader area start -->
     {{-- <div id="preloader">
        <div class="loader"></div>
    </div> --}}

{{-- <div class="container"> --}}
   <!-- login area start -->
    <div class="login-area">
        <div class="container">
            <div class="login-box ptb--100">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="login-form-head">
                        <h4>Sign In</h4>
                        <p>Hello there, Sign in and start managing your Admin Template</p>
                    </div>
                    <div class="login-form-body">
                        <div class="form-gp">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" id="email" name="email">
                            <i class="ti-email"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="form-gp">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" id="password" name="password">
                            <i class="ti-lock"></i>
                            <div class="text-danger"></div>
                        </div>
                        <div class="row mb-4 rmber-area">
                            <div class="col-6">
                                <div class="custom-control custom-checkbox mr-sm-2">
                                    <input type="checkbox" class="custom-control-input" id="remember" name="remember">
                                    <label class="custom-control-label" for="customControlAutosizing">Remember Me</label>
                                </div>
                            </div>
                            <div class="col-6 text-right">
                                <a href="#">Forgot Password?</a>
                            </div>
                        </div>
                        <div class="submit-btn-area">
                            <button id="form_submit" type="submit">Submit <i class="ti-arrow-right"></i></button>
                            {{-- <div class="login-other row mt-4">
                                <div class="col-6">
                                    <a class="fb-login" href="#">Log in with <i class="fa fa-facebook"></i></a>
                                </div>
                                <div class="col-6">
                                    <a class="google-login" href="#">Log in with <i class="fa fa-google"></i></a>
                                </div>
                            </div> --}}
                        </div>
                        <div class="form-footer text-center mt-5">
                            <p class="text-muted">Don't have an account? <a href="{{url('register')}}">Sign up</a></p>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
{{-- </div> --}}




     <!-- jquery latest version -->
     <script src="{{asset('assets-dashboard/js/vendor/jquery-2.2.4.min.js')}}"></script>
     <!-- bootstrap 4 js -->
     <script src="{{asset('assets-dashboard/js/popper.min.js')}}"></script>
     <script src="{{asset('assets-dashboard/js/bootstrap.min.js')}}"></script>
     <script src="{{asset('assets-dashboard/js/owl.carousel.min.js')}}"></script>
     <script src="{{asset('assets-dashboard/js/metisMenu.min.js')}}"></script>
     <script src="{{asset('assets-dashboard/js/jquery.slimscroll.min.js')}}"></script>
     <script src="{{asset('assets-dashboard/js/jquery.slicknav.min.js')}}"></script>
     
     <!-- others plugins -->
     <script src="{{asset('assets-dashboard/js/plugins.js')}}"></script>
     <script src="{{asset('assets-dashboard/js/scripts.js')}}"></script>
    
</body>
</html>


{{-- @endsection --}}
