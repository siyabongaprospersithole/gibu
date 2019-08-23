@extends('settings.layout')
@section('settings-content')
<div class="Subhead mt-0 mb-0">
    <h2 id="public-profile-heading" class="Subhead-heading">Change password</h2>
</div>

<div class="clearfix gutter d-flex flex-shrink-0">
    <div class="col-8" style="padding: 0;
    margin-top: 10px;">
        <form action="{{ route('security.changePassword') }}" method="post">
            @csrf
            <div class="md-form{{ $errors->has('current-password') ? ' has-error' : '' }}">
                <label for="new-password">Old password</label>
                <i class="fa fa-user prefix grey-text"></i>
                <input id="current-password" type="password" class="form-control" name="current-password" required>
                <label for=""></label>
                @if ($errors->has('current-password'))
                <span class="help-block">
                    <strong>{{ $errors->first('current-password') }}</strong>
                </span>
                @endif
            </div>


            <div class="md-form{{ $errors->has('new-password') ? ' has-error' : '' }}">
                <label for="new-password">New password</label>
                <i class="fa fa-envelope prefix grey-text"></i>
                <input id="new-password" type="password" class="form-control" name="new-password" required>

                @if ($errors->has('new-password'))
                <span class="help-block">
                    <strong>{{ $errors->first('new-password') }}</strong>
                </span>
                @endif
                <label for=""></label>
            </div>

            <div class="md-form">
                <label for="new-password-confirm">Confirm new password</label>
                <i class="fa fa-envelope prefix grey-text"></i>
                <input id="new-password-confirm" type="password" class="form-control" name="new-password-confirm"
                    required>

                {{-- @error('confirm_password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror --}}
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
