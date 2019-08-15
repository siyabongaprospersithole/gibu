@extends('profile.layout')
<style>
    .trips {
        position: relative !important;
    }
</style>
@section('profile-content')
<div class="trips">
    <div>

    </div>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function() {
        var i = 2;
            $("#memnav a").eq(i).addClass('selected');
        });
</script>
@endsection
