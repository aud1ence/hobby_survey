@extends('master')
@section('content')
    <div class="card" style="margin-top: 10%">
        <div class="card-header">
            <h1 style="text-align: center">Compare your result</h1>
        </div>
        <table class="table">
            @foreach($arr as $i => $values)
                <tr>
                    @foreach($values as $j => $value)
                        <td @if($j.$i == $selectedId)style="background-color: cornflowerblue" @endif>{{ $value }}</td>
                    @endforeach
                </tr>
            @endforeach
        </table>
    </div>
    <div style="text-align: center; margin-top: 16%">
        <a href="{{ route('pet.index') }}"><button style="width: 250px" class="btn btn-danger">Back</button></a>
    </div>
@endsection
