<?php
// Process adventure info if coming from previous page
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();
    $_SESSION['adventures'] = [];
    
    if (isset($_POST['activities'])) {
        foreach ($_POST['activities'] as $activity) {
            $_SESSION['adventures'][] = [
                'name' => $activity['name'],
                'date' => $activity['date'],
                'participants' => $activity['participants'],
                'price' => $activity['price'],
                'interests' => isset($activity['interests']) ? $activity['interests'] : []
            ];
        }
    }
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
    <div class="step completed">
        <span>3</span>
        <p>Accommodation</p>
    </div>
    <div class="step completed">
        <span>4</span>
        <p>Adventures</p>
    </div>
    <div class="step active">
        <span>5</span>
        <p>Transport</p>
    </div>
</div>

<h2 class="mb-4">Vehicle Rental</h2>
<form action="confirmation.php" method="post">
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="vehicleType" class="form-label">Vehicle Type</label>
            <select class="form-select" id="vehicleType" name="vehicleType" required>
                <option value="">Select Vehicle</option>
                <option value="car">Car</option>
                <option value="van">Van</option>
                <option value="bike">Bike</option>
            </select>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="pickupDate" class="form-label">Pickup Date</label>
            <input type="date" class="form-control" id="pickupDate" name="pickupDate" required>
        </div>
        <div class="col-md-6">
            <label for="dropoffDate" class="form-label">Drop-off Date</label>
            <input type="date" class="form-control" id="dropoffDate" name="dropoffDate" required>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="transportPrice" class="form-label">Daily Rate ($)</label>
            <input type="number" class="form-control" id="transportPrice" name="transportPrice" min="0" step="0.01" required>
        </div>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-between">
        <a href="adventures.php" class="btn btn-secondary">Back</a>
        <button type="submit" class="btn btn-primary">Review Booking</button>
    </div>
</form>

<?php
require_once 'includes/footer.php';
?>