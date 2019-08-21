@extends('layouts.app')
<style>
    .card {
        margin: 10px;
    }

    .right {
        float: right;
    }

    .left {
        float: left;
    }

    .container {
        margin: auto;
    }

    .row {
        margin: auto;
    }

    .driver-name {
        font-size: 10px;
    }

    .available-seats {
        float: right;
        cursor: pointer;
    }

    .available-seats:hover .tooltiptext {
        visibility: visible;
    }

    .available-seats .tooltiptext {
        visibility: hidden;
        width: 150px;
        background-color: black;
        color: #fff;
        text-align: center;
        border-radius: 6px;
        padding: 5px 5px;
        position: absolute;
        z-index: 1;
        top: 95%;
        left: 72%;
    }

    div#load_more {
        margin-top: 20px;
        margin: 10px;
    }

    #post_data {
        display: inline;
    }

    h5.card-title {
        width: 100%;
        height: 25px;
    }
</style>
@section('content')
<div class="container">
    <div class="row" id="post_data">
        {{ csrf_field() }}
        {{-- @php
        $lastId = 0;
        @endphp
        @foreach ($gibs as $gib)
        @php
        $lastId = $gib->id;
        @endphp
        <div class="card" style="width: 21rem;">
            <div class="card-body">
                <h5 class="card-title">{{$gib->route->source}}</h5>
        <h6 class="card-subtitle mb-2 text-muted">To</h6>
        <h6 class="card-title">{{$gib->route->destination}}</h6>

        <h6 class="card-subtitle mb-2 text-muted">Driver <span class="driver-name"></span>
            {{$gib->driver->user->profile->first_name}} {{ $gib->driver->user->profile->last_name }} </span>
        </h6>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
            card's content.</p>
        <a href="#" class="card-link">View</a>
        <a href="#" class="card-link">Book</a>

        <div class="available-seats">
            <a href="#" class="card-link"><img src={{ asset('img/default/available-seats.png') }} alt="" srcset=""
                    style="
                                height: 25px;
                            "></a>

            <a href="#" class="card-link">{{$gib->seats}}</a>

            <span class="tooltiptext">available seats</span>
        </div>
        <div id="load_more" class="row">
            <button type="button" name="load_more_button" class="btn btn-success form-control" data-id="{{$lastId}}"
                id="load_more_button">Load More</button>
        </div>
    </div>
</div>
@endforeach --}}
</div>

</div>
@endsection

@section('script-import')
<script src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
@endsection

@section('script')
<script>
    $(document).ready(function(){
    var _token = $('input[name="_token"]').val();


// var id = $('#load_more_button').data('id');
load_more('start', _token);
function load_more(id, _token){
    console.log(id + ' ' + _token)
$.ajax({
    url: "{{ route('home-load_more') }}",
    method: "post",
    data: {id: id, _token: _token},
    success: function(data){
    $('#load_more').remove();
    $('#post_data').append(data);
    }
})
}

$(document).on('click', '#load_more_button', function(){
var id = $(this).data('id');
console.log(id)
$('#load_more_button').html('<b>Loading...</b>');
load_more(id, _token);
});
});
</script>
@endsection
