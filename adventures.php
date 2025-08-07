<?php
// Process accommodation info if coming from previous page
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    session_start();
    $_SESSION['accommodation'] = [
        'location' => $_POST['location'],
        'checkIn' => $_POST['checkIn'],
        'checkOut' => $_POST['checkOut'],
        'rooms' => $_POST['rooms'],
        'hasWifi' => isset($_POST['hasWifi']) ? 1 : 0,
        'hasKitchen' => isset($_POST['hasKitchen']) ? 1 : 0,
        'hasPool' => isset($_POST['hasPool']) ? 1 : 0,
        'hasLivingRoom' => isset($_POST['hasLivingRoom']) ? 1 : 0,
        'preferences' => $_POST['preferences'],
        'accommodationPrice' => $_POST['accommodationPrice']
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
    <div class="step completed">
        <span>3</span>
        <p>Accommodation</p>
    </div>
    <div class="step active">
        <span>4</span>
        <p>Adventures</p>
    </div>
    <div class="step">
        <span>5</span>
        <p>Transport</p>
    </div>
</div>

<h2 class="mb-4">Adventure Activities</h2>
<form action="transport.php" method="post" id="adventureForm">
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="numActivities" class="form-label">Number of Adventures</label>
            <input type="number" class="form-control" id="numActivities" name="numActivities" min="0" value="0">
        </div>
    </div>
    
    <div id="activitiesContainer">
        <!-- Adventures will be added here dynamically -->
    </div>
    
    <div class="d-grid gap-2 d-md-flex justify-content-md-between">
        <a href="accommodations.php" class="btn btn-secondary">Back</a>
        <button type="submit" class="btn btn-primary">Next: Transport</button>
    </div>
</form>

<script>
document.getElementById('numActivities').addEventListener('change', function() {
    const container = document.getElementById('activitiesContainer');
    container.innerHTML = '';
    const numActivities = parseInt(this.value);
    
    for (let i = 0; i < numActivities; i++) {
        const activityDiv = document.createElement('div');
        activityDiv.className = 'activity-card mb-4 p-3 border rounded';
        activityDiv.innerHTML = `
            <h5>Adventure ${i + 1}</h5>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="activity${i}" class="form-label">Activity</label>
                    <select class="form-select" id="activity${i}" name="activities[${i}][name]" required>
                        <option value="">Select Activity</option>
                        <option value="Hiking">Hiking</option>
                        <option value="Scuba Diving">Scuba Diving</option>
                        <option value="Safari">Safari</option>
                        <option value="City Tour">City Tour</option>
                        <option value="Wine Tasting">Wine Tasting</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="activityDate${i}" class="form-label">Date</label>
                    <input type="date" class="form-control" id="activityDate${i}" name="activities[${i}][date]" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="participants${i}" class="form-label">Number of Participants</label>
                    <input type="number" class="form-control" id="participants${i}" name="activities[${i}][participants]" min="1" required>
                </div>
                <div class="col-md-6">
                    <label for="activityPrice${i}" class="form-label">Price per Person ($)</label>
                    <input type="number" class="form-control" id="activityPrice${i}" name="activities[${i}][price]" min="0" step="0.01" required>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-md-12">
                    <label class="form-label">Interests</label>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="nature${i}" name="activities[${i}][interests][]" value="Nature">
                        <label class="form-check-label" for="nature${i}">Nature</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="adventure${i}" name="activities[${i}][interests][]" value="Adventure">
                        <label class="form-check-label" for="adventure${i}">Adventure</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="culture${i}" name="activities[${i}][interests][]" value="Culture">
                        <label class="form-check-label" for="culture${i}">Culture</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="relaxation${i}" name="activities[${i}][interests][]" value="Relaxation">
                        <label class="form-check-label" for="relaxation${i}">Relaxation</label>
                    </div>
                </div>
            </div>
        `;
        container.appendChild(activityDiv);
    }
});
</script>

