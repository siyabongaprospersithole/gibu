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
<div class="container" style="margin-top: 5%;">
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
            <a href="{{ route('login') }}" target="_blank" class="btn btn-indigo btn-lg">Login
                <i class="fa fa-facebook ml-2"></i>
            </a>
        </div>
        <div class="col-md-6 col-xl-5 mb-4">
            <div class="card" style="    border: 1px solid rgba(0,0,0,.125);">
                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <p class="h4 text-left mb-4">Sign up</p>

                        <div class="md-form">
                            <label for="first_name">Your Name</label>
                            <i class="fa fa-user prefix grey-text"></i>
                            <input id="first_name" type="text"
                                class="form-control @error('first_name') is-invalid @enderror" name="first_name"
                                value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                            <label for=""></label>
                            @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <div class="md-form">
                            <label for="last_name">Your Surname</label>
                            <i class="fa fa-user prefix grey-text"></i>
                            <input id="last_name" type="text"
                                class="form-control @error('last_name') is-invalid @enderror" name="last_name"
                                value="{{ old('last_name') }}" required autocomplete="last_name" autofocus>

                            @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for=""></label>
                        </div>

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
                            <label for="phonenumber">Your Phonenumber</label>
                            <i class="fa fa-exclamation-triangle prefix grey-text"></i>
                            <input id="phonenumber" type="text"
                                class="form-control @error('phonenumber') is-invalid @enderror" name="phonenumber"
                                value="{{ old('phonenumber') }}" required autocomplete="phonenumber" autofocus>

                            @error('phonenumber')
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
                                autocomplete="new-password">

                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <label for=""></label>
                        </div>

                        <div class="md-form">
                            <label for="password-confirm">Confirm Your password</label>
                            <i class="fa fa-exclamation-triangle prefix grey-text"></i>
                            <input id="password-confirm" type="password" class="form-control"
                                name="password_confirmation" required autocomplete="new-password">
                            <label for=""></label>
                        </div>

                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="defaultCheck12" required>
                            <label for="defaultCheck12" class="grey-text">Accept the
                                <a href="#" class="blue-text"> Terms and Conditions</a>
                            </label>
                        </div>
                        <br>
                        <p>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </p>
                        {{-- <div class="text-center mt-4">
                            <button class="btn btn-primary" type="submit">Register</button>
                        </div> --}}
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
