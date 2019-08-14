@extends('profile.layout')
<style>
    .followers {
        position: relative !important;
    }

    .follower-item {
        padding-bottom: 20px !important;
        padding-top: 20px !important;
        display: table !important;
        width: 100%;
    }

    .avatar {
        border-radius: 3px;
        display: inline-block;
        line-height: 1;
        overflow: hidden;
        vertical-align: middle;
    }

    .d-inline-block {
        display: inline-block !important;
    }

    .pr-3 {
        padding-right: 16px !important;
    }

    .v-align-top {
        vertical-align: top !important;
    }

    .text-gray {
        color: #586069 !important;
    }

    .link-gray-dark {
        color: #24292e !important;
    }

    .text-small {
        font-size: 12px !important;
    }

    .border-gray-light {
        border-color: #eaecef !important;
        border-bottom: 1px solid #e1e4e8 !important;
    }
</style>
@section('profile-content')
<div class="followers">
    <div class="follower-item border-gray-light">
        <div class="d-table-cell v-align-top">
            <a class="d-inline-block" href="#">
                <img src="https://avatars3.githubusercontent.com/u/7859083?s=88&v=4" alt="" srcset="" height="50"
                    width="50" class="avatar">
            </a>
        </div>

        <div class="d-table-cell col-9 v-align-top pr-3">
            <a href="" class="d-inline-block no-underline mb-1">
                <span class="f4 link-gray-dark">sabelo hlabisa</span>
            </a>

            <p class="text-gray text-small mb-0">
                durban
            </p>
        </div>

        <div class="d-table-cell  v-align-top text-right">
            <span class="user-following-container js-toggler-container js-social-container on">
                <span class="unfollow">
                    <button type="submit" class="btn btn-primary">unfollow</button>
                </span>
            </span>
        </div>
    </div>

    <div class="follower-item border-gray-light">
        <div class="d-table-cell v-align-top">
            <a class="d-inline-block" href="#">
                <img src="https://avatars3.githubusercontent.com/u/7859083?s=88&v=4" alt="" srcset="" height="50"
                    width="50" class="avatar">
            </a>
        </div>

        <div class="d-table-cell col-9 v-align-top pr-3">
            <a href="" class="d-inline-block no-underline mb-1">
                <span class="f4 link-gray-dark">sabelo hlabisa</span>
            </a>

            <p class="text-gray text-small mb-0">
                durban
            </p>
        </div>

        <div class="d-table-cell  v-align-top text-right">
            <span class="user-following-container js-toggler-container js-social-container on">
                <span class="unfollow">
                    <button type="submit" class="btn btn-primary">unfollow</button>
                </span>
            </span>
        </div>
    </div>

    <div class="follower-item border-gray-light">
        <div class="d-table-cell v-align-top">
            <a class="d-inline-block" href="#">
                <img src="https://avatars3.githubusercontent.com/u/7859083?s=88&v=4" alt="" srcset="" height="50"
                    width="50" class="avatar">
            </a>
        </div>

        <div class="d-table-cell col-9 v-align-top pr-3">
            <a href="" class="d-inline-block no-underline mb-1">
                <span class="f4 link-gray-dark">sabelo hlabisa</span>
            </a>

            <p class="text-gray text-small mb-0">
                durban
            </p>
        </div>

        <div class="d-table-cell  v-align-top text-right">
            <span class="user-following-container js-toggler-container js-social-container on">
                <span class="unfollow">
                    <button type="submit" class="btn btn-primary">unfollow</button>
                </span>
            </span>
        </div>
    </div>
</div>
@endsection
@section('script')
<script>
    $(document).ready(function() {
        var i = 4;
            $("#memnav a").eq(i).addClass('selected');
        });
</script>
@endsection
