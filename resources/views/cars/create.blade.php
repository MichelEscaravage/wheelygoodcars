@extends('layouts.app')
@section('content')
<form id="multiStepForm" action="">
    @csrf
    <div class="phase-1" id="phase-1">
        <label for="license_plate">Kentekenplaat</label>
        <input class="license" type="text" id="license-plate" name="license-plate">
        <button type="button" onclick="showPhase(2)">GO!</button>
    </div>

    <div class="phase-2" id="phase-2">

        <div class="form-group">
            <label for="make">Merk</label>
            <input type="text" id="make" name="make">
        </div>
        <div class="form-group">
            <label for="model">Model</label>
            <input type="text" id="model" name="model">
        </div>
        <div class="form-group-H">
            <label for="seats">Zitplaatsen</label>
            <input type="text" id="seats" name="seats">

            <label for="doors">Aantal deuren</label>
            <input type="number" id="doors" name="doors">

            <label for="weight">Massa Rijklaar</label>
            <input type="number" id="weight" name="weight">
        </div>
        <div class="form-group">
            <label for="production_year">Merk</label>
            <input type="text" id="producton_year" name="production_year">
        </div>
        <div class="form-group">
            <label for="mileage">Merk</label>
            <input type="text" id="mileage" name="mileage">
        </div>
        <div class="form-group">
            <label for="mileage">Merk</label>
            <input type="text" id="mileage" name="mileage">
        </div>
        <div class="form-group">
            <label for="price">Vraagprijs</label>
            <input type="text" id="price" name="price">
        </div>

        
        <input type="submit" value="Aanbod afronden">

    </div>
</form>
@endsection
<script>
function showPhase(phase) {
    // Hide all phases
    document.getElementById('phase-1').style.display = 'block';
    document.getElementById('phase-2').style.display = 'block';

}

window.onload = function() {
    document.getElementById('phase-2').style.display = 'none';
}
</script>