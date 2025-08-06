<?php
require_once 'includes/header.php';
?>

<div class="booking-steps">
    <div class="step completed">
        <span>1</span>
        <p>Customer Info</p>
    </div>
    <div class="step">
        <span>2</span>
        <p>Flights</p>
    </div>
    <div class="step">
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

<h2 class="mb-4">Customer Information</h2>
<form action="flights.php" method="post">
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="firstName" class="form-label">First Name</label>
            <input type="text" class="form-control" id="firstName" name="firstName" required>
        </div>
        <div class="col-md-6">
            <label for="lastName" class="form-label">Last Name</label>
            <input type="text" class="form-control" id="lastName" name="lastName" required>
        </div>
    </div>
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="col-md-6">
            <label for="phone" class="form-label">Phone</label>
            <input type="tel" class="form-control" id="phone" name="phone" required>
        </div>
    </div>
    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="submit" class="btn btn-primary">Next: Flights</button>
    </div>
</form>

<?php
require_once 'includes/footer.php';
?>