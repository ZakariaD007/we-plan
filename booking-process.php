<?php
require_once 'includes/header.php';
?>

<style>
    body {
        background: linear-gradient(to bottom right, #f9fafb, #f1f5f9);
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .booking-wrapper {
        max-width: 900px;
        margin: 0 auto;
        padding: 40px 20px;
    }

    .booking-card {
        background: white;
        border-radius: 24px;
        box-shadow: 0 20px 30px rgba(0, 0, 0, 0.05);
        padding: 32px;
        margin-bottom: 32px;
    }

    .step-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 16px;
    }

    .step-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: #111827;
    }

    .step-indicator {
        font-size: 0.9rem;
        color: #6b7280;
    }

    .progress-bar-wrapper {
        height: 8px;
        background: #e5e7eb;
        border-radius: 9999px;
        overflow: hidden;
        margin-bottom: 32px;
    }

    .progress-bar-fill {
        height: 100%;
        background: linear-gradient(to right, #ec4899, #f43f5e);
        width: 20%; /* Step 1 of 5 = 20% */
        transition: width 0.3s ease-in-out;
    }

    .btn-gradient {
        background: linear-gradient(to right, #ec4899, #f43f5e);
        color: white;
        border: none;
        padding: 10px 20px;
        border-radius: 16px;
        box-shadow: 0 8px 20px rgba(244, 63, 94, 0.3);
        transition: background 0.3s ease, box-shadow 0.3s ease;
    }

    .btn-gradient:hover {
        background: linear-gradient(to right, #db2777, #e11d48);
        box-shadow: 0 12px 25px rgba(244, 63, 94, 0.4);
    }
</style>

<div class="booking-wrapper">
    <!-- Progress Header -->
    <div class="step-header">
        <h1 class="step-title">Premium Package Booking</h1>
        <span class="step-indicator">Step 1 of 5</span>
    </div>

    <!-- Progress Bar -->
    <div class="progress-bar-wrapper">
        <div class="progress-bar-fill"></div>
    </div>

    <!-- Booking Card -->
    <div class="booking-card">
        <h2 class="mb-4 fw-semibold">Customer Information</h2>
        <form action="flights.php" method="post">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="firstName" class="form-label">First Name</label>
                    <input type="text" class="form-control rounded-pill" id="firstName" name="firstName" required>
                </div>
                <div class="col-md-6">
                    <label for="lastName" class="form-label">Last Name</label>
                    <input type="text" class="form-control rounded-pill" id="lastName" name="lastName" required>
                </div>
            </div>
            <div class="row mb-4">
                <div class="col-md-6">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" class="form-control rounded-pill" id="email" name="email" required>
                </div>
                <div class="col-md-6">
                    <label for="phone" class="form-label">Phone</label>
                    <input type="tel" class="form-control rounded-pill" id="phone" name="phone" required>
                </div>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn-gradient">
                    Next: Flights
                </button>
            </div>
        </form>
    </div>
</div>

<?php
require_once 'includes/footer.php';
?>
