@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Where To?</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">From:</label>
                            <select class="form-control" name="from" id="exampleFormControlSelect1" required>
                              @foreach($cities as $city)
                                <option value="{{$city->id}}" <?=(request("from") == $city->id)?"selected":""?>>{{$city->name}}</option>
                              @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlSelect2">To:</label>
                            <select class="form-control" name="to" id="exampleFormControlSelect2" required>
                              @foreach($cities as $city)
                                <option value="{{$city->id}}" <?=(request("to") == $city->id)?"selected":""?>>{{$city->name}}</option>
                              @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary mb-2">Search</button>
                    </form>
                </div>
            </div>

            <div class="card">
                <div class="card-header">Results</div>

                <div class="card-body">
                    @if(isset($lines) && $lines->count() > 0)
                    @foreach($lines as $line)
                            <a href="{{url('line-details/'.$line->line_id.'?from_city_id='.request("from").'&to_city_id='.request("to"))}}" target="_blank" rel="noopener noreferrer">{{$line->line->fromCity->name}} - {{$line->line->toCity->name}}</a>
                    @endforeach
                    @else
                    <label for="">There is no results</label>
                    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
