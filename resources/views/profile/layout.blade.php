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
        border-bottom-color: #e36209;
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
</style>
@section('script-import')
<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
@endsection
@section('content')
<div class="page-content container clearfix">
    <div class="col-3 float-left pr-4">
        <div class="card-group-item">
            <header class="card-header card-header-profile">
                <h5 class="title">Notifications</h5>
            </header>
            <div class="filter-content">

            </div>
        </div>
    </div>


    <div class="col-9 float-left">
        <div class="profile-tabs">
            <nav class="underline-nav" id="memnav">
                <a href="{{ route('view-profile',['id'=>\Auth::user()->id]) }}" class="underline-nav-item">Overview</a>
                <a href="{{ route('view-gibs',['id'=>\Auth::user()->id]) }}" class="underline-nav-item">Gibu Rides</a>
                <a href="{{ route('view-trips',['id'=>\Auth::user()->id]) }}" class="underline-nav-item">Gibu Trips</a>
                <a href="{{ route('view-cars',['id'=>\Auth::user()->id]) }}" class="underline-nav-item">Cars</a>
                <a href="{{ route('view-followers',['id'=>\Auth::user()->id]) }}"
                    class="underline-nav-item">Followers</a>
                <a href="{{ route('view-following',['id'=>\Auth::user()->id]) }}"
                    class="underline-nav-item">Following</a>
            </nav>
        </div>
        @yield('profile-content')
    </div>
</div>
@endsection

@section('script')

@endsection
