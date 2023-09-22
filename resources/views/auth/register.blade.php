<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from tabib-v2.inaikas.com/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Jan 2023 10:53:07 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Hexashop</title>
    <!-- Favicon icon -->

    <!-- Base Styling  -->
    <link rel="stylesheet" href="{{asset('admin/assets/main/css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/main/css/style.css')}}">
</head>
<body>
    

<div class="container"style="margin-top:5%">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <br><br>
            <center><h1>{{ __('Register') }}</h1></center>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="phone" class="col-md-4 col-form-label text-md-end">{{ __('phone ') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="phone" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autocomplete="phone">

                                @error('phone')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="address" class="col-md-4 col-form-label text-md-end">{{ __(' Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="address" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address">

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-dark">
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
 <!-- JQuery v3.5.1 -->
 <script src="{{asset('admin/assets/plugins/jquery/jquery.min.js')}}"></script>

<!-- popper js -->
<script src="{{asset('admin/assets/plugins/popper/popper.min.js')}}"></script>

<!-- Bootstrap -->
<script src="{{asset('admin/assets/plugins/bootstrap/js/bootstrap.js')}}"></script>

<!-- Moment -->
<script src="{{asset('admin/assets/plugins/moment/moment.min.js')}}"></script>

<!-- Date Range Picker -->
<script src="{{asset('admin/assets/plugins/daterangepicker/daterangepicker.min.js')}}"></script>

<!-- Main Custom JQuery -->
<script src="{{asset('admin/assets/js/toggleFullScreen.js')}}"></script>
<script src="{{asset('admin/assets/js/main.')}}"></script>
<script src="{{asset('admin/assets/js/option-themes.js')}}"></script>

</body>


<!-- Mirrored from tabib-v2.inaikas.com/page-register.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Jan 2023 10:53:07 GMT -->
</html>
