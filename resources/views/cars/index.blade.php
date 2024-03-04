@extends('layouts.app')
@section('content')
<h1>TEST</h1>
<div class="car-grid">
    @foreach ($cars as $car)
        <div class="car">
            <p class="make">{{ $car->make }} {{ $car->model }}</p>
            <p class="license">{{ $car->license_plate }}</p>
            <p class="price">{{ $car->price }}</p>
            <p class="mileage">{{ $car->mileage }}</p>
        </div>
    @endforeach
</div>
@endsection
