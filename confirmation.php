<?php
// Process transport info if coming from previous page
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();
    $_SESSION['transport'] = [
        'vehicleType' => $_POST['vehicleType'],
        'pickupDate' => $_POST['pickupDate'],
        'dropoffDate' => $_POST['dropoffDate'],
        'transportPrice' => $_POST['transportPrice']
    ];
}

require_once 'includes/header.php';
require_once 'includes/db.php';
require_once 'includes/functions.php';

// Calculate total price
$flightPrice = $_SESSION['flight']['flightPrice'] * $_SESSION['flight']['tickets'];
$accommodationNights = (strtotime($_SESSION['accommodation']['checkOut']) - strtotime($_SESSION['accommodation']['checkIn'])) / (60 * 60 * 24);
$accommodationPrice = $_SESSION['accommodation']['accommodationPrice'] * $accommodationNights * $_SESSION['accommodation']['rooms'];

$adventurePrice = 0;
foreach ($_SESSION['adventures'] as $adventure) {
    $adventurePrice += $adventure['price'] * $adventure['participants'];
}

$transportDays = (strtotime($_SESSION['transport']['dropoffDate']) - strtotime($_SESSION['transport']['pickupDate'])) / (60 * 60 * 24);
$transportPrice = $_SESSION['transport']['transportPrice'] * $transportDays;

$totalPrice = calculateTotalPrice($flightPrice, $accommodationPrice, $adventurePrice, $transportPrice);

// Generate booking reference
$bookingReference = generateBookingReference();

// Save to database
try {
    $pdo->beginTransaction();
    
    // Save customer
    $stmt = $pdo->prepare("INSERT INTO customers (first_name, last_name, email, phone) VALUES (?, ?, ?, ?)");
    $stmt->execute([
        $_SESSION['customer']['firstName'],
        $_SESSION['customer']['lastName'],
        $_SESSION['customer']['email'],
        $_SESSION['customer']['phone']
    ]);
    $customerId = $pdo->lastInsertId();
    
    // Save booking
    $stmt = $pdo->prepare("INSERT INTO bookings (customer_id, booking_reference, total_price) VALUES (?, ?, ?)");
    $stmt->execute([$customerId, $bookingReference, $totalPrice]);
    $bookingId = $pdo->lastInsertId();
    
    // Save flight
    $stmt = $pdo->prepare("INSERT INTO flights (booking_id, departure_location, arrival_location, departure_date, return_date, tickets, price) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([
        $bookingId,
        $_SESSION['flight']['departureLocation'],
        $_SESSION['flight']['arrivalLocation'],
        $_SESSION['flight']['departureDate'],
        $_SESSION['flight']['returnDate'],
        $_SESSION['flight']['tickets'],
        $_SESSION['flight']['flightPrice']
    ]);
    
    // Save accommodation
    $stmt = $pdo->prepare("INSERT INTO accommodations (booking_id, location, check_in, check_out, rooms, has_wifi, has_kitchen, has_pool, has_living_room, preferences, price) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->execute([
        $bookingId,
        $_SESSION['accommodation']['location'],
        $_SESSION['accommodation']['checkIn'],
        $_SESSION['accommodation']['checkOut'],
        $_SESSION['accommodation']['rooms'],
        $_SESSION['accommodation']['hasWifi'],
        $_SESSION['accommodation']['hasKitchen'],
        $_SESSION['accommodation']['hasPool'],
        $_SESSION['accommodation']['hasLivingRoom'],
        $_SESSION['accommodation']['preferences'],
        $_SESSION['accommodation']['accommodationPrice']
    ]);
    
    // Save adventures
    foreach ($_SESSION['adventures'] as $adventure) {
        $stmt = $pdo->prepare("INSERT INTO adventures (booking_id, activity, activity_date, participants, price) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([
            $bookingId,
            $adventure['name'],
            $adventure['date'],
            $adventure['participants'],
            $adventure['price']
        ]);
    }
    
    // Save transport
    $stmt = $pdo->prepare("INSERT INTO transport (booking_id, vehicle_type, pickup_date, dropoff_date, price) VALUES (?, ?, ?, ?, ?)");
    $stmt->execute([
        $bookingId,
        $_SESSION['transport']['vehicleType'],
        $_SESSION['transport']['pickupDate'],
        $_SESSION['transport']['dropoffDate'],
        $_SESSION['transport']['transportPrice']
    ]);
    
    $pdo->commit();
} catch (Exception $e) {
    $pdo->rollBack();
    die("Error saving booking: " . $e->getMessage());
}
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
    <div class="step completed">
        <span>5</span>
        <p>Transport</p>
    </div>
</div>

<h2 class="mb-4">Booking Confirmation</h2>
<div class="card mb-4">
    <div class="card-header bg-success text-white">
        <h4 class="mb-0">Booking Successful!</h4>
    </div>
    <div class="card-body">
        <p class="lead">Thank you for your booking, <?php echo htmlspecialchars($_SESSION['customer']['firstName']); ?>!</p>
        <p>Your booking reference is: <strong><?php echo $bookingReference; ?></strong></p>
        <p>We've sent a confirmation email to <?php echo htmlspecialchars($_SESSION['customer']['email']); ?>.</p>
    </div>
</div>

<div class="row">
    <div class="col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-header bg-primary text-white">
                <h5>Customer Information</h5>
            </div>
            <div class="card-body">
                <p><strong>Name:</strong> <?php echo htmlspecialchars($_SESSION['customer']['firstName'] . ' ' . $_SESSION['customer']['lastName']); ?></p>
                <p><strong>Email:</strong> <?php echo htmlspecialchars($_SESSION['customer']['email']); ?></p>
                <p><strong>Phone:</strong> <?php echo htmlspecialchars($_SESSION['customer']['phone']); ?></p>
            </div>
        </div>
    </div>
    
    <div class="col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-header bg-primary text-white">
                <h5>Flight Details</h5>
            </div>
            <div class="card-body">
                <p><strong>From:</strong> <?php echo htmlspecialchars($_SESSION['flight']['departureLocation']); ?></p>
                <p><strong>To:</strong> <?php echo htmlspecialchars($_SESSION['flight']['arrivalLocation']); ?></p>
                <p><strong>Departure:</strong> <?php echo date('M j, Y', strtotime($_SESSION['flight']['departureDate'])); ?></p>
                <p><strong>Return:</strong> <?php echo date('M j, Y', strtotime($_SESSION['flight']['returnDate'])); ?></p>
                <p><strong>Tickets:</strong> <?php echo $_SESSION['flight']['tickets']; ?></p>
                <p><strong>Flight Cost:</strong> $<?php echo number_format($flightPrice, 2); ?></p>
            </div>
        </div>
    </div>
    
    <div class="col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-header bg-primary text-white">
                <h5>Accommodation Details</h5>
            </div>
            <div class="card-body">
                <p><strong>Location:</strong> <?php echo htmlspecialchars($_SESSION['accommodation']['location']); ?></p>
                <p><strong>Check-in:</strong> <?php echo date('M j, Y', strtotime($_SESSION['accommodation']['checkIn'])); ?></p>
                <p><strong>Check-out:</strong> <?php echo date('M j, Y', strtotime($_SESSION['accommodation']['checkOut'])); ?></p>
                <p><strong>Rooms:</strong> <?php echo $_SESSION['accommodation']['rooms']; ?></p>
                <p><strong>Amenities:</strong>
                    <?php
                    $amenities = [];
                    if ($_SESSION['accommodation']['hasWifi']) $amenities[] = 'WiFi';
                    if ($_SESSION['accommodation']['hasKitchen']) $amenities[] = 'Kitchen';
                    if ($_SESSION['accommodation']['hasPool']) $amenities[] = 'Pool';
                    if ($_SESSION['accommodation']['hasLivingRoom']) $amenities[] = 'Living Room';
                    echo implode(', ', $amenities);
                    ?>
                </p>
                <p><strong>Accommodation Cost:</strong> $<?php echo number_format($accommodationPrice, 2); ?></p>
            </div>
        </div>
    </div>
    
    <div class="col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-header bg-primary text-white">
                <h5>Adventure Activities</h5>
            </div>
            <div class="card-body">
                <?php if (count($_SESSION['adventures']) > 0): ?>
                    <?php foreach ($_SESSION['adventures'] as $index => $adventure): ?>
                        <div class="mb-3">
                            <h6>Activity <?php echo $index + 1; ?></h6>
                            <p><strong>Activity:</strong> <?php echo htmlspecialchars($adventure['name']); ?></p>
                            <p><strong>Date:</strong> <?php echo date('M j, Y', strtotime($adventure['date'])); ?></p>
                            <p><strong>Participants:</strong> <?php echo $adventure['participants']; ?></p>
                            <p><strong>Interests:</strong> <?php echo implode(', ', $adventure['interests']); ?></p>
                            <p><strong>Cost:</strong> $<?php echo number_format($adventure['price'] * $adventure['participants'], 2); ?></p>
                        </div>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>No adventures selected.</p>
                <?php endif; ?>
                <p><strong>Total Adventures Cost:</strong> $<?php echo number_format($adventurePrice, 2); ?></p>
            </div>
        </div>
    </div>
    
    <div class="col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-header bg-primary text-white">
                <h5>Transport Details</h5>
            </div>
            <div class="card-body">
                <p><strong>Vehicle Type:</strong> <?php echo ucfirst($_SESSION['transport']['vehicleType']); ?></p>
                <p><strong>Pickup Date:</strong> <?php echo date('M j, Y', strtotime($_SESSION['transport']['pickupDate'])); ?></p>
                <p><strong>Drop-off Date:</strong> <?php echo date('M j, Y', strtotime($_SESSION['transport']['dropoffDate'])); ?></p>
                <p><strong>Transport Cost:</strong> $<?php echo number_format($transportPrice, 2); ?></p>
            </div>
        </div>
    </div>
    
    <div class="col-md-6 mb-4">
        <div class="card h-100">
            <div class="card-header bg-info text-white">
                <h5>Payment Summary</h5>
            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <td>Flights:</td>
                        <td class="text-end">$<?php echo number_format($flightPrice, 2); ?></td>
                    </tr>
                    <tr>
                        <td>Accommodation:</td>
                        <td class="text-end">$<?php echo number_format($accommodationPrice, 2); ?></td>
                    </tr>
                    <tr>
                        <td>Adventures:</td>
                        <td class="text-end">$<?php echo number_format($adventurePrice, 2); ?></td>
                    </tr>
                    <tr>
                        <td>Transport:</td>
                        <td class="text-end">$<?php echo number_format($transportPrice, 2); ?></td>
                    </tr>
                    <tr class="table-active">
                        <th>Total:</th>
                        <th class="text-end">$<?php echo number_format($totalPrice, 2); ?></th>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="d-grid gap-2">
    <a href="index.php" class="btn btn-success">Return to Homepage</a>
</div>

<?php
// Clear the session after booking is complete
session_unset();
session_destroy();

require_once 'includes/footer.php';
?>