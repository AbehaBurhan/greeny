{{-- @extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Register') }}</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('register') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                                <div class="col-md-6">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password-confirm"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Register') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection --}}


<!DOCTYPE html>
<html lang="en">
<!-- Mirrored from mironmahmud.com/greeny/assets/ltr/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Nov 2023 09:55:15 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="template" content="greeny">
    <meta name="title" content="greeny - Ecommerce Food Store HTML Template">
    <meta name="keywords"
        content="organic, food, shop, ecommerce, store, html, bootstrap, template, agriculture, vegetables, products, farm, grocery, natural, online">
    <title>Greeny - Register</title>
    <link rel="icon" href="{{ asset('agency/assets/images/favicon.png') }}">
    <link rel="stylesheet" href="{{ asset('agency/assets/fonts/flaticon/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('agency/assets/fonts/icofont/icofont.min.css') }}">
    <link rel="stylesheet" href="{{ asset('agency/assets/fonts/fontawesome/fontawesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('agency/assets/vendor/venobox/venobox.min.css') }}">
    <link rel="stylesheet" href="{{ asset('agency/assets/vendor/slickslider/slick.min.css') }}">
    <link rel="stylesheet" href="{{ asset('agency/assets/vendor/niceselect/nice-select.min.css') }}">
    <link rel="stylesheet" href="{{ asset('agency/assets/vendor/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('agency/assets/css/main.css') }}">
    <link rel="stylesheet" href="{{ asset('agency/assets/css/user-auth.css') }}">
</head>

<body>
    <section class="user-form-part">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-sm-10 col-md-12 col-lg-12 col-xl-10">
                    <div class="user-form-logo">
                        <a href="index.html">
                            <img src="{{ asset('greeny/assets/images/logo.png') }}" alt="logo">
                        </a>
                    </div>
                    <div class="user-form-card">
                        <div class="user-form-title">
                            <h2>Join Now!</h2>
                            <p>Setup A New Account In A Minute</p>
                        </div>
                        <div class="user-form-group">
                            <ul class="user-form-social">
                                <li><a href="#" class="facebook"><i class="fab fa-facebook-f"></i>Join with
                                        facebook</a></li>
                                <li><a href="#" class="twitter"><i class="fab fa-twitter"></i>Join with
                                        twitter</a></li>
                                <li><a href="#" class="google"><i class="fab fa-google"></i>Join with
                                        google</a>
                                </li>
                                <li><a href="#" class="instagram"><i class="fab fa-instagram"></i>Join with
                                        instagram</a></li>
                            </ul>
                            <div class="user-form-divider">
                                <p>or</p>
                            </div>
                            <form class="user-form" method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group">
                                    <input id="name" type="text"
                                        class="form-control @error('name') is-invalid @enderror" name="name"
                                        value="{{ old('name') }}" required autocomplete="name" autofocus
                                        placeholder="Enter your name">

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">

                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email"
                                        placeholder="Enter your email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password" placeholder="Enter your password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password"
                                        placeholder="Enter confirm password">
                                </div>
                                <div class="form-check mb-3">
                                    <input class="form-check-input" type="checkbox" value="" id="check">
                                    <label class="form-check-label" for="check">Accept all the
                                        <a href="#">Terms & Conditions</a>
                                    </label>
                                </div>
                                <div class="form-button"><button type="submit">register</button></div>
                            </form>
                        </div>
                    </div>
                    <div class="user-form-remind">
                        <p>Already Have An Account?<a href="{{ route('login') }}">login here</a></p>
                    </div>
                    <div class="user-form-footer">
                        <p>Greeny | &COPY; Copyright by <a href="#">Mironcoder</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('agency/assets/vendor/bootstrap/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('agency/assets/vendor/bootstrap/popper.min.js') }}"></script>
    <script src="{{ asset('agency/assets/vendor/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('agency/assets/vendor/countdown/countdown.min.js') }}"></script>
    <script src="{{ asset('agency/assets/vendor/niceselect/nice-select.min.js') }}"></script>
    <script src="{{ asset('agency/assets/vendor/slickslider/slick.min.js') }}"></script>
    <script src="{{ asset('agency/assets/vendor/venobox/venobox.min.js') }}"></script>
    <script src="{{ asset('agency/assets/js/nice-select.js') }}"></script>
    <script src="{{ asset('agency/assets/js/countdown.js') }}"></script>
    <script src="{{ asset('agency/assets/js/accordion.js') }}"></script>
    <script src="{{ asset('agency/assets/js/venobox.js') }}"></script>
    <script src="{{ asset('agency/assets/js/slick.js') }}"></script>
    <script src="{{ asset('agency/assets/js/main.js') }}"></script>
</body>
<!-- Mirrored from mironmahmud.com/greeny/assets/ltr/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Nov 2023 09:55:15 GMT -->

</html>
