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
            padding: .5rem 1rem;
            position: relative;
        }

        li.nav-item.notification-image:hover {
            cursor: pointer;
        }

        .notification-image .notification-status {
            background-clip: padding-box;
            background-image: linear-gradient(#00cc83, #00cc83);
            border-radius: 100%;
            height: 12px;
            left: 30px;
            position: absolute;
            top: 7px;
            width: 12px;
            z-index: 2;
        }

        .notification-image .notification-status .unread {
            display: inline-block;
        }
    </style>

    @yield('script-import')
</head>

<body>
    <div id="app" style="background-color: white">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="header-container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src={{ asset('img/logos/gibu-transparent.png') }} alt="" srcset="" style="
                    height: 30px;
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

                        <li class="nav-item notification-image">
                            <a href="{{ route('notifications-unread') }}">
                                <span class="notification-status unread">

                                </span>
                                <img src="{{ asset('img/default/notification.png') }}" style="height: 25px;" alt=""
                                    srcset="">
                            </a>

                        </li>


                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->profile->first_name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a href="" class="dropdown-item">
                                    <span class="signed-in-as dropdown-info">Signed in as </span>
                                    <br>
                                    <span class="user-name  dropdown-info">{{ Auth::user()->profile->first_name }}
                                    </span>
                                </a>

                                <a href="" class="dropdown-item">
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
</body>
@yield('script')

</html>
