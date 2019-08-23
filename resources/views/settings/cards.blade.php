@extends('settings.layout')
@section('settings-content')
<div class="Subhead mt-0 mb-0">
    <h2 id="public-profile-heading" class="Subhead-heading">bank cards</h2>
</div>
@endsection

@section('script')
<script>
    $(document).ready(function() {
        var i = 5;
            $("#memnav a").eq(i).addClass('selected');
        });
</script>
@endsection
