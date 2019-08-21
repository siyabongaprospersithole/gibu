@extends('layouts.app')
<style>
    .Subhead {
        margin-bottom: 30px;
    }

    .Subhead {
        border-bottom: 1px solid #e1e4e8;
        display: flex;
        flex-flow: row wrap;
        margin-bottom: 16px;
        padding-bottom: 8px;
    }

    .Subhead-heading {
        flex: 1 1 auto;
        font-size: 24px;
        font-weight: 400;
    }

    .Subhead-description {
        color: #586069;
        flex: 1 100%;
        font-size: 14px;
    }
</style>
@section('content')
@yield('gibtrip-content')
@endsection
