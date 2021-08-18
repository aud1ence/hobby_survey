@extends('master')
@section('content')
    <div>
        <h1 style="text-align: center">Choose your favorite food</h1>
    </div>
    <div class="row">
        @foreach($foods as $food)
            <div class="col-md-4">
                <div class="card @if(Session::get('food_id') == $food->id){{ "selected" }}@endif" >
                    <img style="height: 250px" src="{{ asset("image/$food->image") }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $food->name }}</h5>
                        <p class="card-text">{{ $food->description }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('food.store', $food->id) }}"><button class="btn btn-primary">Choose</button></a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
