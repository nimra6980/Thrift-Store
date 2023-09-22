

<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from tabib-v2.inaikas.com/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Jan 2023 10:53:04 GMT -->
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
<div class="container" style="margin-top:10%">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <br><br>
             <center><h1>{{ __('Login') }}</h1></center>

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
                   

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-dark">
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
</div>
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
<script src="{{asset('admin/assets/js/main.js')}}"></script>
<script src="{{asset('admin/assets/js/option-themes.js')}}"></script>

</body>


<!-- Mirrored from tabib-v2.inaikas.com/page-login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 10 Jan 2023 10:53:04 GMT -->
</html>
