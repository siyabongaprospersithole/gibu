@extends('profile.layout')
@section('profile-content')
<div class="followings">
    <p class="mt-4">That’s it. You’ve reached the end of
        your followings.</p>
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
