@extends('layouts.app')
<style>
    .card {
        margin: 10px;
    }
    .container{
        margin: auto;
    }
    .row{
        margin: auto;
    }
    .driver-name {
    font-size: 10px;
}
.available-seats {
    float: right;
}

.available-seats:hover  .tooltiptext{
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

  /* Position the tooltip */
  position: absolute;
  z-index: 1;
  top: 100%;
  left: 52%;
}
</style>
@section('content')
<div class="container">
    <div class="row">
        @foreach ($gibs as $gib)
        <div class="card" style="width: 21rem;">
                <div class="card-body">
                    <h5 class="card-title">{{$gib->route->source}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted">To</h6>
                    <h6 class="card-title">{{$gib->route->destination}}</h6>

                    <h6 class="card-subtitle mb-2 text-muted">Driver <span class="driver-name"></span> {{$gib->driver->user->profile->first_name}} {{ $gib->driver->user->profile->last_name }} </span></h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="card-link">View</a>
                    <a href="#" class="card-link">Book</a>

                    <div class="available-seats">
                            <a href="#" class="card-link"><img src={{ asset('img/default/available-seats.png') }} alt="" srcset="" style="
                                height: 25px;
                            "></a>

<a href="#" class="card-link">{{$gib->seats}}</a>

<span class="tooltiptext">available seats</span>
                    </div>

                </div>
            </div>
        @endforeach

    </div>
</div>
@endsection
