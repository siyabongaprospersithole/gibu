@extends('profile.layout')
<style>
    .car-header {
        padding: 20px 0px;
        border-bottom: 1px solid #d1d5da;
    }

    a.btn.btn-primary {
        float: right
    }

    .car-header-item {
        line-height: 10px
    }

    span.cars-info.car-header-item {
        padding-left: 10px;
        font-size: 13px;
    }

    a.btn.btn-primary.car-header-item {
        margin-top: -10px;
    }
</style>
@section('profile-content')
<div class="car-main">
    <div class="car-header">
        <span class="cars-info car-header-item">
            manage your cars and add new ones here
        </span>
        <a href="{{ route('new-car') }}" class="btn btn-primary car-header-item">
            new car
        </a>
    </div>

</div>


@endsection
@section('script')
<script>
    $(document).ready(function() {
        var i = 3;
            $("#memnav a").eq(i).addClass('selected');
        });
</script>
@endsection
