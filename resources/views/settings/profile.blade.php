@extends('settings.layout')
<style>
    p.note.mb-2 {
        color: rgb(88, 96, 105);
        font-size: 12px;
        min-height: 17px;
        margin: 4px 0px 2px;
    }

    .profile-edit {
        position: absolute !important;
        bottom: 110 !important;
        color: white;
        padding: 5px;
        left: 60 !important;
        background-color: #24292e !important;
        border-radius: 6px !important;
    }
</style>
@section('settings-content')
<div class="Subhead mt-0 mb-0">
    <h2 id="public-profile-heading" class="Subhead-heading">Public profile</h2>
</div>

<div class="clearfix gutter d-flex flex-shrink-0">
    <div class="col-8" style="padding: 0;
    margin-top: 10px;">
        <form action="" method="post">
            <div class="md-form">
                <label for="first_name">Name</label>
                <i class="fa fa-user prefix grey-text"></i>
                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror"
                    name="first_name" value="{{ old('first_name') }}" required autocomplete="first_name" autofocus>
                <label for=""></label>
                @error('first_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
            </div>

            <div class="md-form">
                <label for="email">Public email</label>
                <i class="fa fa-envelope prefix grey-text"></i>
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                    value="{{ old('email') }}" required autocomplete="email">

                @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <label for=""></label>
            </div>

            <div class="md-form">
                <label for="location">Location</label>
                <i class="fa fa-envelope prefix grey-text"></i>
                <input id="location" type="location" class="form-control @error('location') is-invalid @enderror"
                    name="location" value="{{ old('location') }}" required autocomplete="location">

                @error('location')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <label for=""></label>
            </div>

            <p class="note mb-2">
                All of the fields on this page are optional and can be deleted at any
                time, and by filling them out, you're giving us consent to share this
                data wherever your user profile appears. Please see our
                <a href="https://github.com/site/privacy">privacy statement</a>
                to learn more about how we use this information.
            </p>

            <p>
                <button type="submit" class="btn btn-primary">Update profile</button>
            </p>

        </form>
    </div>



    <div class="col-4 d-inline-block">
        <div class="card-user-image" style="float: right; margin-top: 10px;">
            <div class="change-imgage-text">
                <label class="d-block mb-2">Profile picture</label>
            </div>
            <img width="200" height="200" src="https://www.w3schools.com/w3images/team2.jpg" alt="John"
                style="object-fit: cover; ">

            <div class="profile-edit">
                <span> edit</span>
            </div>

        </div>
    </div>
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
