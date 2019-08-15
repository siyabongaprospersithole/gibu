<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    <title>Gibu | Get Moving</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <script src="{{ asset('js/pace.min.js') }}" defer></script>

    <link rel="shortcut icon" href="{{ asset('gibu.png') }}">

    <link rel="stylesheet" href="{{ asset('css/pace-theme.css') }}">

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">


    <style>
        html,
        body {
            /* font-family: 'Poppins', sans-serif; */
            /* font-weight: normal;
            font-size: inherit; */
            background-color: white;

            font-weight: normal;
            background-color: white;
            font-size: 15px;
            line-height: 1.5;
            text-transform: capitalize;
        }

        a {
            color: rgb(3, 102, 214);
            text-decoration: none;
        }

        .row {
            justify-content: center;
        }

        .card-header {
            border-bottom: none;
            background-color: white;
        }

        .card {
            border: solid #f7f7f9;

        }

        .gibu-card {
            width: 48%;
            float: left;
        }

        html {
            background-color: white;
        }

        .btn-primary:hover {
            color: #fff;
            background-color: #00cc83;
            border-color: #00cc83;
        }

        .btn-primary {
            color: #fff;
            background-color: #00cc83;
            border-color: #00cc83;
        }

        .btn-primary:active {
            color: #fff;
            background-color: #00cc83;
            border-color: #00cc83;
        }

        .btn-primary:not(:disabled):not(.disabled).active,
        .btn-primary:not(:disabled):not(.disabled):active,
        .show>.btn-primary.dropdown-toggle {
            background-color: #00cc83;
            border-color: #00cc83;
        }

        .btn-primary.focus,
        .btn-primary:focus {
            box-shadow: 0 0 0 0.2rem #00cc83;
        }

        .header-container {
            width: 100%;
            display: flex;
        }

        .dropdown-info {
            font-size: 12px;
        }

        .user-name {
            color: #24292e;
            font-size: larger;
        }

        li.nav-item.notification-image {
            padding-top: 8px;
            padding-right: 8px;
            position: relative;
        }

        li.nav-item.notification-image:hover {
            cursor: pointer;
        }

        .notification-image .notification-status {
            background-clip: padding-box;
            background-image: linear-gradient(#00cc83, #00cc83);
            border-radius: 100%;
            height: 10px;
            left: 10px;
            position: absolute;
            top: 10px;
            width: 10px;
            z-index: 2;
        }

        .notification-image .notification-status .unread {
            display: inline-block;
        }

        .px-3 {
            padding-right: 16px !important;
        }

        .pl-3,
        .px-3 {
            padding-left: 16px !important;
        }

        .width-full {
            width: 100% !important;
        }

        .container-lg,
        .container-xl {
            margin-left: auto;
            margin-right: auto;
        }

        .container-lg {
            max-width: 1125px;
        }

        .d-flex {
            display: flex !important;
        }

        .f6 {
            font-size: 12px !important;
        }

        .pt-6 {
            padding-top: 40px !important;
        }

        .pb-2 {
            padding-bottom: 8px !important;
        }

        .position-relative {
            position: relative !important;
        }

        .flex-justify-between {
            justify-content: space-between !important;
        }

        .text-gray {
            color: #586069 !important;
        }

        .border-gray-light {
            border-color: #eaecef !important;
        }

        .border-top {
            border-top: 1px solid #e1e4e8 !important;
        }

        .d-flex {
            display: flex !important;
        }

        .list-style-none {
            list-style: none !important;
        }

        .flex-wrap {
            flex-wrap: wrap !important;
        }

        ol,
        ul {
            margin-bottom: 0;
            margin-top: 0;
            padding-left: 0;
        }

        .mr-3 {
            margin-right: 16px !important;
        }

        .d-flex {
            display: flex !important;
        }

        .pb-6 {
            padding-bottom: 40px !important;
        }

        .flex-justify-center {
            justify-content: center !important;
        }

        button.load_more {
            margin-top: 20px;
        }

        .dropdown-menu {
            font-size: initial;
        }

        .dropdown-item.active,
        .dropdown-item:active {
            background-color: #00cc83;
        }
    </style>

    @yield('script-import')
</head>

<body>
    <div id="app" style="background-color: white; padding-bottom: 10px;">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="header-container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src={{ asset('img/logos/gibu-transparent.png') }} alt="" srcset="" style="
                    height: 27;
                ">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <a href="{{ route('notifications-unread') }}">
                            <li class="nav-item notification-image">

                                <span class="notification-status unread">

                                </span>
                                <img src="{{ asset('img/default/notification.png') }}" style="height: 16px;" alt=""
                                    srcset="">


                            </li>
                        </a>

                        <li class="nav-item dropdown">
                            <a id="createDropDown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre
                                style="padding-top: 13px;">
                                <img src="{{ asset('img/default/add.png') }}" alt="" sizes="" srcset=""
                                    style="height: 14px;">
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="createDropDown">
                                <a href="" class="dropdown-item">
                                    Request a gib
                                </a>

                                <a href="" class="dropdown-item">
                                    Create a gib
                                </a>
                                <a href="" class="dropdown-item">
                                    Add car
                                </a>
                            </div>
                        </li>


                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <img style="border-radius: 10px;"
                                    src="https://avatars1.githubusercontent.com/u/12032477?s=40&u=11fc2fd8af37db7df40162e988c76e0956f6db5c&v=4"
                                    alt="" srcset="" height="20"> <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a href="{{ route('view-profile', ['id'=> \Auth::user()->id]) }}" class="dropdown-item">
                                    <span class="signed-in-as dropdown-info">Signed in as </span>
                                    <br>
                                    <span class="user-name  dropdown-info">{{ Auth::user()->profile->first_name }}
                                    </span>
                                </a>

                                <a href="{{ route('view-profile', ['id'=> \Auth::user()->id]) }}" class="dropdown-item">
                                    Your profile
                                </a>

                                <a href="" class="dropdown-item">
                                    Help
                                </a>

                                <a href="{{ route('settings') }}" class="dropdown-item">
                                    Settings
                                </a>

                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    {{ __('Sign out') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>

        <main class="py-4">
            @yield('content')
        </main>
    </div>

    <div class="footer container-lg width-full px-3">
        <div
            class="position-relative d-flex flex-justify-between pt-6 pb-2 mt-6 f6 text-gray border-top border-gray-light">
            <ul class="list-style-none d-flex flex-wrap">
                <li class="mr-3">
                    © 2019
                    <span title="0.28281s from unicorn-5b56cc8bb4-kn2dh">Gibu</span>
                    , Inc.
                </li>

                <li class="mr-3">
                    <a href="">Terms</a>
                </li>

                <li class="mr-3">
                    <a href="">Privacy</a>
                </li>

                <li class="mr-3">
                    <a href="">Security</a>
                </li>

                <li class="mr-3">
                    <a href="">Status</a>
                </li>

                <li class="mr-3">
                    <a href="">Help</a>
                </li>
            </ul>
        </div>

        <div class="d-flex flex-justify-center pb-6">

        </div>
    </div>
</body>
@yield('script')

</html>
