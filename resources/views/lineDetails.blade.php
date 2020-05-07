@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
            <div class="card-header">{{$line->fromCity->name}} - {{$line->toCity->name}}</div>

                <div class="card-body">

                    <label for="stations">Stations</label>
                    <ul>
                        @if($line->stations()->count() > 0)
                        @foreach($line->stations as $station)
                        <li>
                            {{$station->city->name}}
                        </li>
                        @endforeach
                        @endif
                    </ul>
                <label for="">Available seats from {{$from_station->name}} to {{$to_station->name}}</label>
                    {{$available_seats->count()}} seats


                    @if (count($errors) > 0)
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{ $error }}
                        </div>
                        @endforeach
                    @endif
                <form action="{{url("/booking")}}" method="POST">
                    @csrf
                    <input type="hidden" name="line_id" value="{{$line->id}}">
                    <input type="hidden" name="from_city_id" value="{{$from_station->id}}">
                    <input type="hidden" name="to_city_id" value="{{$to_station->id}}">
                   <?php $x = 1;?>
                    @foreach($available_seats as $seat)

                    <div class="form-check">
                    <input class="form-check-input" type="radio" name="bus_seat_id" id="exampleRadios{{$seat->bus_seat_id}}" value="{{$seat->bus_seat_id}}" <?= ($x==1)?"checked":""?>>
                        <label class="form-check-label" for="exampleRadios{{$seat->bus_seat_id}}">
                            {{$seat->seat->code}}
                        </label>
                      </div>
                      <?php $x++;?>
                    @endforeach

                    <button type="submit" class="btn btn-primary mb-2">Book</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
