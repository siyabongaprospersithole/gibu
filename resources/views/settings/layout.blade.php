@extends('layouts.app')
<style>
    .page-content {
        padding-top: 20px;
    }

    .card-group-item {
        border-radius: 3px;
        border: 1px solid #d1d5da;
    }

    a.list-group-item.selected {
        border-left: 1px solid #0366d6;
    }

    .list-group-item.selected {
        background-color: #fff;
        color: #24292e;
        cursor: default;
        font-weight: 600;
    }

    .Subhead.mt-0.mb-0 {
        border-bottom: 1px solid #e1e4e8;
        padding-bottom: 8px;
    }

    .Subhead-heading {
        flex: 1 1 auto;
        font-size: 24px;
        font-weight: 400;
    }

    .locations {
        margin-top: 10px;
        border: 1px;
    }
</style>
@section('script-import')
<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
@endsection
@section('content')
<div class="page-content container clearfix">
    <div class="col-3 float-left pr-4">
        <div class="card-group-item">
            <header class="card-header card-header-profile"
                style="background-color: rgba(0,0,0,.03); border-bottom: 1px solid rgba(0,0,0,.125);">
                <h5 class="title">Personal settings</h5>
            </header>
            <div class="filter-content">
                <div class="list-group list-group-flush" id="memnav">
                    <a href="{{ route('settings') }}" class="list-group-item">Profile<span
                            class="float-right badge badge-light round">142</span> </a>
                    <a href="{{ route('account') }}" class="list-group-item">Account<span
                            class="float-right badge badge-light round">3</span> </a>
                    <a href="{{ route('security') }}" class="list-group-item">Security<span
                            class="float-right badge badge-light round">32</span> </a>
                    <a href="{{ route('emails') }}" class="list-group-item">Emails<span
                            class="float-right badge badge-light round">12</span> </a>
                    <a href="{{ route('notifications') }}" class="list-group-item">Notifications<span
                            class="float-right badge badge-light round">3</span> </a>
                </div> <!-- list-group .// -->
            </div>
        </div>

        <div class="card-group-item locations">
            <a href="#" class="list-group-item">Locations<span class="float-right badge badge-light round">3</span> </a>
        </div>
    </div>


    <div class="col-9 float-left">
        <!-- public profile -->
        @yield('settings-content')
    </div>
</div>
@endsection

@section('script')

@endsection
