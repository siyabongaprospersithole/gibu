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

                    <h6 class="card-subtitle mb-2 text-muted">Driver {{$gib->driver->user->profile->first_name}}</h6>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the
                        card's content.</p>
                    <a href="#" class="card-link">View</a>
                    <a href="#" class="card-link">Book</a>
                </div>
            </div>
        @endforeach

    </div>
</div>
@endsection
