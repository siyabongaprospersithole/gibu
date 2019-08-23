@extends('layouts.app')
<style>
    .underline-nav-item {
        border-bottom: 2px solid transparent;
        color: #586069;
        line-height: 1.5;
        margin-right: 16px;
        padding: 16px 8px;
        text-align: center;
    }

    .underline-nav-item.selected {
        border-bottom-color: #00cc83;
        color: #24292e;
        font-weight: 600;
    }

    a.underline-nav-item:hover {
        border-bottom-color: #d1d5da;
        color: #24292e;
        text-decoration: none;
        transition: .2s ease;
    }

    .profile-tabs {
        border-bottom: 1px solid #d1d5da;
    }

    .underline-nav {
        display: flex;
    }

    .card-user-image {
        margin: auto;
        text-align: left;
        width: 260;
        height: 260;
    }

    .user-name {
        padding-top: 10px;
        font-size: 26px;
    }

    .page-content.container-xl.clearfix {
        max-width: 1280px;
        margin: auto;
    }

    span.profile-item {
        padding-right: 10px;
    }
</style>
@section('script-import')
<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
<script src="{{ asset('js/datepicker.js') }}"></script>
<link rel="stylesheet" href="{{ asset('css/datepicker.css') }}">
@endsection

@section('content')
<div class="page-content container-xl clearfix">
    <div class="col-3 float-left pr-4">
        <div class="card-group-item">
            <div class="filter-content">
                <div class="card-user-image">
                    <img width="260" height="260" src="https://www.w3schools.com/w3images/team2.jpg" alt="John"
                        style="object-fit: cover;">

                    <div class="user-verification">
                        {{-- display user verification status here --}}
                    </div>

                    <div class="user-name">
                        <p>
                            simphiwe hlabisa
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="col-9 float-left">
        <div class="profile-tabs">
            <nav class="underline-nav" id="memnav">
                <a href="{{ route('view-profile',['id'=>\Auth::user()->slug]) }}" class="underline-nav-item"> <span
                        class="profile-item">Overview</span></a>
                <a href="{{ route('view-gibs',['id'=>\Auth::user()->slug]) }}" class="underline-nav-item"><span
                        class="profile-item">Gibu Rides</span><span class="badge badge-light round">15</span></a></a>
                <a href="{{ route('view-trips',['id'=>\Auth::user()->slug]) }}" class="underline-nav-item"><span
                        class="profile-item">Gibu
                        Trips</span>
                    <span class="badge badge-light round">3</span></a>
                <a href="{{ route('view-cars',['id'=>\Auth::user()->slug]) }}" class="underline-nav-item"><span
                        class="profile-item">Cars</span><span class="badge badge-light round">1</span></a></a>
                <a href="{{ route('view-followers',['id'=>\Auth::user()->slug]) }}" class="underline-nav-item"><span
                        class="profile-item">Followers</span><span class="badge badge-light round">3</span></a></a>
                <a href="{{ route('view-following',['id'=>\Auth::user()->slug]) }}" class="underline-nav-item"><span
                        class="profile-item">Following</span><span class="badge badge-light round">0</span></a></a>
            </nav>
        </div>
        @yield('profile-content')
    </div>
</div>
@endsection

@section('script')

@endsection
