@extends('settings.layout')
<style>
    p.note.mb-2 {
        color: rgb(88, 96, 105);
        font-size: 12px;
        min-height: 17px;
        margin: 4px 0px 2px;
    }

    .mt-3 {
        margin-top: 16px !important;
    }

    .position-relative {
        position: relative !important;
    }

    .upload {
        background-color: #eff3f6;
        background-image: linear-gradient(-180deg, #fafbfc, #eff3f6 90%);
        color: #24292e;
    }

    .upload {
        -moz-appearance: none;
        -moz-user-select: none;
        -ms-user-select: none;
        -webkit-appearance: none;
        -webkit-user-select: none;
        appearance: none;
        background-position: -1px -1px;
        background-repeat: repeat-x;
        background-size: 110% 110%;
        border: 1px solid rgba(27, 31, 35, .2);
        border-radius: .25em;
        cursor: pointer;
        display: inline-block;
        font-size: 14px;
        font-weight: 600;
        line-height: 20px;
        padding: 6px 12px;
        position: relative;
        user-select: none;
        vertical-align: middle;
        white-space: nowrap;
    }

    label {
        font-weight: 600;
    }

    .upload .manual-file-chooser {
        line-height: 34px;
        padding: 0;
        top: 0;
    }

    .left-0 {
        left: 0 !important;
    }

    .top-0 {
        top: 0 !important;
    }

    .ml-0,
    .mx-0 {
        margin-left: 0 !important;
    }

    .height-full {
        height: 100% !important;
    }

    .width-full {
        width: 100% !important;
    }

    .position-absolute {
        position: absolute !important;
    }

    .manual-file-chooser {
        cursor: pointer;
        margin-left: -80px;
        opacity: .0001;
        padding: 5px;
        position: absolute;
        width: 240px;
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
            <img width="200" height="200" src="https://www.w3schools.com/w3images/team2.jpg" alt="John"
                style="object-fit: cover; ">

            <div class="change-imgage-text">
                <div class="avatar-upload">
                    <label class="position-relative upload button-change-avatar mt-3">
                        Upload new picture
                        <input type="file"
                            class="manual-file-chooser width-full height-full ml-0 js-manual-file-chooser left-0 top-0 position-absolute">
                    </label>

                    <div class="upload-state loading">
                        <button type="button" class=" mt-3 upload" disabled="">
                            <img width="16" height="16" alt="" class="v-align-text-bottom"
                                src="https://github.githubassets.com/images/spinners/octocat-spinner-32.gif">
                            Uploading...
                        </button>
                    </div>
                </div>
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
