@extends('layout.app')

@section('content')
    <h3>LOTS</h3>
    @if(count($lots) > 1)
        @foreach($lots as $lot)
        <div class = "well">
            <h3>{{$lots->lot_no}}</h3>
        </div>
        @endforeach
    @else
        <p>No posts found</p>
    @endif
@endsection