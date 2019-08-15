@extends('settings.layout')
<style>
    .p {
        margin-top: 1rem;
    }
</style>
@section('settings-content')
<div class="Subhead mt-0 mb-0">
    <h2 id="public-profile-heading" class="Subhead-heading">Notifications</h2>
</div>

<p class="p">Choose how you receive notifications. These notification settings apply to the <a href="/watching">things
        you’re
        watching</a>.</p>
@endsection

{{-- change selection --}}
@section('script')
<script>
    $(document).ready(function() {
        var i = 4;
            $("#memnav a").eq(i).addClass('selected');
        });
</script>
@endsection
