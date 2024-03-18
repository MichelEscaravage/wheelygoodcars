@extends('layouts.app')
@section('content')
<form id="multiStepForm" action="">
    @csrf
    <div class="phase-1" id="phase-1">
        <label for="license_plate"class="text">Kentekenplaat</label>
        <div class="flex">
            <div class="licenseNl">NL</div>
            <input class="licenseinput" type="text" id="license-plate" name="license-plate">
            <button type="button" class="Gobutton" onclick="showPhase(2)">GO!</button>
        </div>
    </div>

<div class="frame" id="phase-2">
    <div class="phase-2" >
        <div class="form-group">
            <label for="make">Merk</label>
            <input type="text" id="make" name="make">
        </div>
        <div class="form-group">
            <label for="model">Model</label>
            <input type="text" id="model" name="model">
        </div>
        <div class="form-group">
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
</div>
    
</form>
@endsection


<script>
function showPhase(phase) {
    // Hide all phases
    document.getElementById('phase-1').style.display = 'block';
    document.getElementById('phase-2').style.display = 'block';

  // Get the license plate entered by the user
  var licensePlate = document.getElementById('license-plate').value;

// Check if the license plate input is empty
if (licensePlate.trim() === '') {
    alert('Please enter a license plate number.');
    return;
}

// Make an AJAX request to the API endpoint
var xhr = new XMLHttpRequest();
xhr.open('GET', 'https://api.overheid.io/voertuiggegevens/' + licensePlate);
xhr.setRequestHeader('Content-Type', 'application/json');
xhr.setRequestHeader('ovio-api-key', '36c97cc160ff133dadf41f7c893eee3427e3b3db1b67e505a0cfff8b75af2d6b');
xhr.onload = function() {
    if (xhr.status === 200) {
        var data = JSON.parse(xhr.responseText);
        // Populate the form fields with the received data
        document.getElementById('make').value = data.merk || '';
        document.getElementById('model').value = data.handelsbenaming || '';
        document.getElementById('seats').value = data.aantal_zitplaatsen || '';
        document.getElementById('doors').value = data.aantal_deuren || '';
        document.getElementById('weight').value = data.massa_rijklaar || '';
        document.getElementById('production_year').value = data.datum_eerste_toelating ? new Date(data.datum_eerste_toelating).getFullYear() : '';
        document.getElementById('mileage').value = ''; // You can fill this with appropriate data if available
        document.getElementById('price').value = ''; // You can fill this with appropriate data if available

        // Display phase-2 and keep phase-1 visible
        document.getElementById('phase-2').style.display = 'block';
    } else {
        // Handle error
        console.error('Error fetching vehicle data');
    }
};
xhr.send();
}

window.onload = function() {
// Hide phase-2 initially
document.getElementById('phase-2').style.display = 'none';
}
</script>