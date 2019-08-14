@extends('layouts.app')
<style>
    nav.navbar.navbar-expand-md.navbar-light.bg-white.shadow-sm {
        display: none;
    }

    .btn-indigo {
        box-shadow: 0 0 0 0.2rem rgba(52, 144, 220, .25);
    }
</style>
@section('content')
<div class="container" style="margin-top: 10%;">
    <div class="row wow fadeIn">
        <div class="col-md-6 mb-4 white-text text-center text-md-left">
            <h1 class="display-4 font-weight-bold">Sign UP</h1>
            <hr class="hr-light">
            <p>
                <strong>For the more information</strong>
            </p>
            <p class="mb-4 d-none d-md-block">
                <strong>Quickly get information from new leads and customers by signing up .WIth their information, you
                    can funnel them into new accounts in an instant.Follow us on FACEBOOK</strong>
            </p>
            <a href="{{ route('register') }}" target="_blank" class="btn btn-indigo btn-lg">Register
                <i class="fa fa-facebook ml-2"></i>
            </a>
        </div>
        <div class="col-md-6 col-xl-5 mb-4">
            <div class="card" style="    border: 1px solid rgba(0,0,0,.125);">
                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <p class="h4 text-left mb-4">Log in</p>


                        <div class="md-form">
                            <label for="email">Your Email</label>
                            <i class="fa fa-envelope prefix grey-text"></i>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for=""></label>
                        </div>



                        <div class="md-form">
                            <label for="password">Your password</label>
                            <i class="fa fa-lock prefix grey-text"></i>
                            <input id="password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="current-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for=""></label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('remember') ? 'checked' : '' }}>
                            <label for="remember" class="grey-text">{{ __('Remember Me') }}
                            </label>
                        </div>
                        <br>
                        <p>
                            <button class="btn btn-primary" type="submit">Register</button>
                            @if (Route::has('password.request'))
                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                            @endif
                        </p>

                </div>
                </form>
            </div>
        </div>
    </div>
</div>
</div>
@endsection
