@extends('profile.layout')
@section('profile-content')

@endsection
@section('script')
<script>
    $(document).ready(function() {
        var i = 2;
            $("#memnav a").eq(i).addClass('selected');
        });
</script>
@endsection
