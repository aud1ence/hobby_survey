@extends('master')
@section('content')
    <div>
        <h1 style="text-align: center">Choose your favorite pet</h1>
    </div>
    <div class="row">
        @foreach($pets as $pet)
            <div class="col-md-4">
                <div class="card @if(Session::get('pet_id') == $pet->id) {{ "selected" }} @endif">
                    <img style="height: 250px" src="{{ asset("image/$pet->image") }}"
                         class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $pet->name }}</h5>
                        <p class="card-text">{{ $pet->description }}</p>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('pet.store',$pet->id) }}">
                            <button class="btn btn-primary">Choose</button>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div style="text-align: center; margin-top: 10%">
        <a href="{{ route('food.index') }}">
            <button style="width: 250px;" class="btn btn-danger">Back</button>
        </a>
    </div>
@endsection
