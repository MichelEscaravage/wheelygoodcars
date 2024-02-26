@extends('layouts.app')
@section('content')
    @foreach ($cars as $car)
        <p>{{ $car->license_plate }}</p>   
    @endforeach
@endsection
