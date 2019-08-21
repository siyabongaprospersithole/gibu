@extends('gibtrip.layout')
<style>
    p.note.mb-2 {
        color: rgb(88, 96, 105);
        font-size: 12px;
        min-height: 17px;
        margin: 4px 0px 2px;
    }
</style>
@section('gibtrip-content')

<div class="container-lg width-full px-3">
    <div class="subhead">
        <h2 class="subhead-heading">
            create a new gibtrip
        </h2>

        <p class="subhead-description">
            A gibtrip contains all details about your road trip.
        </p>


    </div>
    <div class="col-8" style="padding: 0;
                margin-top: 10px;">
        <form action="{{ route('post.new.trip') }}" method="post">
            @csrf
            <div class="md-form row">
                <div class="col-md">
                    <label for="source">place of departure (city)</label>
                    <i class="fa fa-user prefix grey-text"></i>
                    <input id="source" type="text" class="form-control @error('source') is-invalid @enderror"
                        name="source" value="{{ old('source') }}" required autocomplete="source" autofocus>
                    <label for=""></label>
                    @error('source')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-md">
                    <label for="destination">destination place (city)</label>
                    <i class="fa fa-user prefix grey-text"></i>
                    <input id="destination" type="text" class="form-control @error('destination') is-invalid @enderror"
                        name="destination" value="{{ old('destination') }}" required autocomplete="destination"
                        autofocus>
                    <label for=""></label>
                    @error('destination')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            <div class="md-form">
                <label for="total_seats">avaibale seats</label>
                <i class="fa fa-envelope prefix grey-text"></i>
                <input id="total_seats" type="total_seats"
                    class="form-control @error('total_seats') is-invalid @enderror" name="total_seats"
                    value="{{ old('total_seats') }}" required autocomplete="total_seats">

                @error('total_seats')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <label for=""></label>
            </div>

            <div class="md-form row">
                <div class="col-md">
                    <label for="price_per_seat">price per seat</label>
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <input id="price_per_seat" type="price_per_seat"
                        class="form-control @error('price_per_seat') is-invalid @enderror" name="price_per_seat"
                        value="{{ old('price_per_seat') }}" required autocomplete="price_per_seat">

                    @error('price_per_seat')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <label for=""></label>
                </div>
                <div class="col-md">
                    <label for="car">Select Car (brand-model-licence plate)</label>
                    <i class="fa fa-envelope prefix grey-text"></i>
                    <select name="car" id="car" class="form-control">
                        @foreach ($cars as $car)
                        <option @if ($car->id == old('car'))
                            selected = "selected"

                            @endif value="{{$car->id}}"> {{ $car->brand }} - {{ $car->model }}- {{ $car->licence }}
                        </option>
                        @endforeach
                    </select>
                    {{-- <input id="location" type="location" class="form-control @error('location') is-invalid @enderror"
                        name="location" value="{{ old('location') }}" required autocomplete="location"> --}}

                    @error('car')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                    <label for=""></label>
                </div>

            </div>

            <div class="md-form">
                <label for="special-note">special note</label>
                <i class="fa fa-envelope prefix grey-text"></i>
                <textarea name="special-note" id="special-note" class="form-control"></textarea>
                {{-- <input id="location" type="location" class="form-control @error('location') is-invalid @enderror"
                    name="location" value="{{ old('location') }}" required autocomplete="location"> --}}

                @error('special-note')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                @enderror
                <label for=""></label>
            </div>
            <p class="note mb-2">
                if you have any extra notices to make about this trip put it on #special-note e.g #no-smoking
            </p>




            <div class="md-form row">
                <div class="col-md">
                    <label for="deputure_date">departure date</label>
                    <i class="fa fa-user prefix grey-text"></i>
                    <input id="deputure_date" type="date"
                        class="form-control @error('deputure_date') is-invalid @enderror" name="deputure_date"
                        value="{{ old('deputure_date') }}" required autocomplete="deputure_date" autofocus>
                    <label for=""></label>
                    @error('deputure_date')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>

                <div class="col-md">
                    <label for="deputure_time">departure time</label>
                    <i class="fa fa-user prefix grey-text"></i>
                    <input id="deputure_time" type="time"
                        class="form-control @error('deputure_time') is-invalid @enderror" name="deputure_time"
                        value="{{ old('deputure_time') }}" required autocomplete="deputure_time" autofocus>
                    <label for=""></label>
                    @error('deputure_time')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            {{-- <p class="note mb-2">
                        All of the fields on this page are optional and can be deleted at any
                        time, and by filling them out, you're giving us consent to share this
                        data wherever your user profile appears. Please see our
                        <a href="https://github.com/site/privacy">privacy statement</a>
                        to learn more about how we use this information.
                    </p> --}}

            <p>
                <button type="submit" class="btn btn-primary">continue</button>
            </p>

        </form>
    </div>
</div>
@endsection
