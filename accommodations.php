<?php
// Process flight info if coming from previous page
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();
    $_SESSION['flight'] = [
        'departureLocation' => $_POST['departureLocation'],
        'arrivalLocation' => $_POST['arrivalLocation'],
        'departureDate' => $_POST['departureDate'],
        'returnDate' => $_POST['returnDate'],
        'tickets' => $_POST['tickets'],
        'flightPrice' => $_POST['flightPrice']
    ];
}

require_once 'includes/header.php';
?>

<div class="booking-steps">
    <div class="step completed">
        <span>1</span>
        <p>Customer Info</p>
    </div>
    <div class="step completed">
        <span>2</span>
        <p>Flights</p>
    </div>
    <div class="step active">
        <span>3</span>
        <p>Accommodation</p>
    </div>
    <div class="step">
        <span>4</span>
        <p>Adventures</p>
    </div>
    <div class="step">
        <span>5</span>
        <p>Transport</p>
    </div>
</div>

<h2 class="mb-4">Accommodation Booking</h2>
<form action="adventures.php" method="post">
    <div class="row mb-3">
        <div class="col-md-6">
            
<div id="map" style="height: 400px; margin-bottom: 10px;"></div>
<input type="text" id="latlng" name="location" class="form-control" placeholder="Click on the map to select a location" required>

<!-- Google Maps Picker -->
<div id="map" style="height: 400px; width: 100%; margin-top: 10px;"></div>

<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places"></script>
<script>
  let map;
  let marker;

  function initMap() {
    const initial = { lat: -33.9249, lng: 18.4241 }; // Cape Town

    map = new google.maps.Map(document.getElementById("map"), {
      center: initial,
      zoom: 12,
    });

    map.addListener("click", (e) => {
      placeMarker(e.latLng);
      getAddress(e.latLng);
    });
  }

  function placeMarker(location) {
    if (marker) marker.setMap(null);
    marker = new google.maps.Marker({
      position: location,
      map: map,
    });
  }

  function getAddress(latLng) {
    const geocoder = new google.maps.Geocoder();
    geocoder.geocode({ location: latLng }, (results, status) => {
      if (status === "OK") {
        if (results[0]) {
          document.getElementById("location").value = results[0].formatted_address;
        } else {
          alert("No address found");
        }
      } else {
        alert("Geocoder failed: " + status);
      }
    });
  }

  window.onload = initMap;
</script>

        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="checkIn" class="form-label">Check-in Date</label>
            <input type="date" class="form-control" id="checkIn" name="checkIn" required>
        </div>
        <div class="col-md-6">
            <label for="checkOut" class="form-label">Check-out Date</label>
            <input type="date" class="form-control" id="checkOut" name="checkOut" required>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="rooms" class="form-label">Number of Rooms</label>
            <input type="number" class="form-control" id="rooms" name="rooms" min="1" required>
        </div>
        <div class="col-md-6">
            <label for="accommodationPrice" class="form-label">Price per Night ($)</label>
            <input type="number" class="form-control" id="accommodationPrice" name="accommodationPrice" min="0" step="0.01" required>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12">
            <label class="form-label">Amenities</label>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="hasWifi" name="hasWifi">
                <label class="form-check-label" for="hasWifi">WiFi</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="hasKitchen" name="hasKitchen">
                <label class="form-check-label" for="hasKitchen">Kitchen</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="hasPool" name="hasPool">
                <label class="form-check-label" for="hasPool">Pool</label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="hasLivingRoom" name="hasLivingRoom">
                <label class="form-check-label" for="hasLivingRoom">Living Room</label>
            </div>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-12">
            <label for="preferences" class="form-label">Special Preferences</label>
            <textarea class="form-control" id="preferences" name="preferences" rows="3"></textarea>
        </div>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-between">
        <a href="flights.php" class="btn btn-secondary">Back</a>
        <button type="submit" class="btn btn-primary">Next: Adventures</button>
    </div>
</form>

<?php
require_once 'includes/footer.php';
?>