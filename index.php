<?php
require_once 'includes/header.php';
?>

<div class="hero-section bg-primary text-white py-5 mb-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 fw-bold mb-4">Your Dream Vacation Starts Here</h1>
                <p class="lead mb-4">Book flights, accommodations, adventures, and transportation all in one place for a seamless travel experience.</p>
                <a href="booking-process.php" class="btn btn-light btn-lg px-4 me-2">Book Now</a>
                <a href="#features" class="btn btn-outline-light btn-lg px-4">Learn More</a>
            </div>
            <div class="col-lg-6">
                <img src="assets/travel-hero.jpg" alt="Travel Destinations" class="img-fluid rounded shadow">
            </div>
        </div>
    </div>
</div>

<div class="container mb-5" id="features">
    <h2 class="text-center mb-5">Why Choose TravelEase?</h2>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center p-4">
                    <div class="feature-icon bg-primary bg-gradient text-white rounded-circle mx-auto mb-4 p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-airplane" viewBox="0 0 16 16">
                            <path d="M6.428 1.151C6.708.591 7.213 0 8 0s1.292.592 1.572 1.151C9.861 1.73 10 2.431 10 3v3.691l5.17 2.585a1.5 1.5 0 0 1 .83 1.342V12a.5.5 0 0 1-.582.493l-5.507-.918-.375 2.253 1.318 1.318A.5.5 0 0 1 10.5 16h-5a.5.5 0 0 1-.354-.854l1.319-1.318-.376-2.253-5.507.918A.5.5 0 0 1 0 12v-1.382a1.5 1.5 0 0 1 .83-1.342L6 6.691V3c0-.568.14-1.271.428-1.849Z"/>
                        </svg>
                    </div>
                    <h4 class="mb-3">Flights</h4>
                    <p class="text-muted">Book flights to destinations worldwide with competitive prices and flexible options.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center p-4">
                    <div class="feature-icon bg-primary bg-gradient text-white rounded-circle mx-auto mb-4 p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-house-door" viewBox="0 0 16 16">
                            <path d="M8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4.5a.5.5 0 0 0 .5-.5v-4h2v4a.5.5 0 0 0 .5.5H14a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146ZM2.5 14V7.707l5.5-5.5 5.5 5.5V14H10v-4a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0-.5.5v4H2.5Z"/>
                        </svg>
                    </div>
                    <h4 class="mb-3">Accommodations</h4>
                    <p class="text-muted">Find the perfect place to stay with our wide selection of hotels, apartments, and resorts.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 border-0 shadow-sm">
                <div class="card-body text-center p-4">
                    <div class="feature-icon bg-primary bg-gradient text-white rounded-circle mx-auto mb-4 p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-bicycle" viewBox="0 0 16 16">
                            <path d="M4 4.5a.5.5 0 0 1 .5-.5H6a.5.5 0 0 1 0 1v.5h4.14l.386-1.158A.5.5 0 0 1 11 4h1a.5.5 0 0 1 0 1h-.64l-.311.935.807 1.29a3 3 0 1 1-.848.53l-.508-.812-2.076 3.322A.5.5 0 0 1 8 10.5H5.959a3 3 0 1 1-1.815-3.274L5 5.856V5h-.5a.5.5 0 0 1-.5-.5zm1.5 2.443-.508.814c.5.444.85 1.054.967 1.743h1.139L5.5 6.943zM8 9.057 9.598 6.5H6.402L8 9.057zM4.937 9.5a1.997 1.997 0 0 0-.487-.877l-.548.877h1.035zM3.603 8.092A2 2 0 1 0 4.937 10.5H3a.5.5 0 0 1-.424-.765l1.027-1.643zm7.947.53a2 2 0 1 0 .848-.53l1.026 1.643a.5.5 0 1 1-.848.53L11.55 8.623z"/>
                        </svg>
                    </div>
                    <h4 class="mb-3">Transport</h4>
                    <p class="text-muted">Rent cars, vans, or bikes to explore your destination at your own pace.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-light py-5 mb-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 mb-4 mb-lg-0">
                <img src="assets/adventure.jpg" alt="Adventure Activities" class="img-fluid rounded shadow">
            </div>
            <div class="col-lg-6">
                <h2 class="mb-4">Exciting Adventures</h2>
                <p class="lead mb-4">Make your trip unforgettable with our curated selection of adventure activities.</p>
                <ul class="list-unstyled">
                    <li class="mb-2"><span class="text-primary me-2">✓</span> Hiking and trekking expeditions</li>
                    <li class="mb-2"><span class="text-primary me-2">✓</span> Scuba diving and snorkeling</li>
                    <li class="mb-2"><span class="text-primary me-2">✓</span> Safari and wildlife tours</li>
                    <li class="mb-2"><span class="text-primary me-2">✓</span> Cultural and city experiences</li>
                    <li class="mb-2"><span class="text-primary me-2">✓</span> Wine tasting and culinary adventures</li>
                </ul>
                <a href="booking-process.php" class="btn btn-primary mt-3">Explore Adventures</a>
            </div>
        </div>
    </div>
</div>

<div class="container mb-5">
    <h2 class="text-center mb-5">How It Works</h2>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card h-100 border-0">
                <div class="card-body text-center p-4">
                    <div class="step-number bg-primary text-white rounded-circle mx-auto mb-4">1</div>
                    <h4 class="mb-3">Provide Your Details</h4>
                    <p class="text-muted">Start by entering your personal information and travel preferences.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 border-0">
                <div class="card-body text-center p-4">
                    <div class="step-number bg-primary text-white rounded-circle mx-auto mb-4">2</div>
                    <h4 class="mb-3">Customize Your Trip</h4>
                    <p class="text-muted">Select flights, accommodations, adventures, and transportation options.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card h-100 border-0">
                <div class="card-body text-center p-4">
                    <div class="step-number bg-primary text-white rounded-circle mx-auto mb-4">3</div>
                    <h4 class="mb-3">Confirm & Enjoy</h4>
                    <p class="text-muted">Review your booking, make payment, and get ready for your adventure!</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-primary text-white py-5">
    <div class="container text-center">
        <h2 class="mb-4">Ready for Your Next Adventure?</h2>
        <p class="lead mb-4">Start planning your perfect trip today with TravelEase.</p>
        <a href="booking-process.php" class="btn btn-light btn-lg px-4">Begin Booking</a>
    </div>
</div>

<?php
require_once 'includes/footer.php';
?>