@extends('settings.layout')
@section('settings-content')
<div class="Subhead mt-0 mb-0">
    <h2 id="public-profile-heading" class="Subhead-heading">Public profile</h2>
</div>
@endsection



{{--  change selection --}}
@section('script')
<script>
    $(document).ready(function() {
        var i = 0;
            $("#memnav a").eq(i).addClass('selected');
        });
</script>
@endsection
