@extends('layouts.app')
<style>
    .page-content {
        padding-top: 20px;
    }

    .list-group-item.selected {
        background-color: #0366d6;
        color: white;
        cursor: default;
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
                <div class="list-group list-group-flush" id="memnav">
                    <a href="{{ route('notifications-unread') }}" class="list-group-item"
                        style="border: none;">Unread<span class="float-right badge badge-light round">142</span> </a>
                    <a href="{{ route('notifications-read') }}" class="list-group-item" style="border: none;">Read<span
                            class="float-right badge badge-light round">3</span> </a>
                    <a href="{{ route('notifications-all') }}" class="list-group-item" style="border: none;">All
                        notifications<span class="float-right badge badge-light round">32</span> </a>
                </div> <!-- list-group .// -->
            </div>
        </div>
    </div>


    <div class="col-9 float-left">
        <!-- public profile -->
        @yield('notifications-content')
    </div>
</div>
@endsection

@section('script')

@endsection
