@extends('settings.layout')
@section('settings-content')
<div class="Subhead mt-0 mb-0">
    <h2 id="public-profile-heading" class="Subhead-heading">Change password</h2>
</div>

<div class="clearfix gutter d-flex flex-shrink-0">
    <div class="col-8" style="padding: 0;
    margin-top: 10px;">
        <form action="" method="post">
            <div class="md-form">
                <label for="password">Old password</label>
                <i class="fa fa-user prefix grey-text"></i>
                <input id="password" type="text" class="form-control @error('password') is-invalid @enderror"
                    name="password" value="{{ old('password') }}" required autocomplete="password" autofocus>
                <label for=""></label>
                @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="md-form">
                <label for="new_password">New password</label>
                <i class="fa fa-envelope prefix grey-text"></i>
                <input id="new_password" type="new_password"
                    class="form-control @error('new_password') is-invalid @enderror" name="new_password"
                    value="{{ old('new_password') }}" required autocomplete="new_password">

                @error('new_password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <label for=""></label>
            </div>

            <div class="md-form">
                <label for="confirm_password">Confirm new password</label>
                <i class="fa fa-envelope prefix grey-text"></i>
                <input id="confirm_password" type="confirm_password"
                    class="form-control @error('confirm_password') is-invalid @enderror" name="confirm_password"
                    value="{{ old('confirm_password') }}" required autocomplete="confirm_password">

                @error('confirm_password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <label for=""></label>
            </div>

            <p class="note mb-2">
                Make sure it's at least 15 characters OR at least 8 characters
            </p>

            <p>
                <button type="submit" class="btn btn-primary">Update profile</button>
            </p>

        </form>
    </div>

    <div class="col-4 d-inline-block">

    </div>
</div>
@endsection


{{--  change selection --}}
@section('script')
<script>
    $(document).ready(function() {
        var i = 2;
            $("#memnav a").eq(i).addClass('selected');
        });
</script>
@endsection
