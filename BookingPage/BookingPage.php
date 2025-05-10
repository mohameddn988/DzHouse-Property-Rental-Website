<!DOCTYPE html>
<html lang="en">

<head>
    <?php session_start(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DZHouse - Find Your Perfect Stay</title>
    <link rel="stylesheet" href="/DzHouse%20Property%20Rental%20Website/BookingPage/BookingPage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>
    <!-- Header -->
    <header>
        <a href="/DzHouse%20Property%20Rental%20Website" class="logo">DZHouse</a>
        <div class="nav-links">
            <a href="/DzHouse%20Property%20Rental%20Website/AccommodationListingManagementPage/AccommodationListingManagementPage.php">Publish an ad</a>
            <a href="/DzHouse%20Property%20Rental%20Website/TenantAccountPage/TenantAccountPage.php">Help</a>
            <a href="/DzHouse%20Property%20Rental%20Website/OwnerAccountPage/OwnerAccountPage.php">travels</a>
            <?php if(isset($_SESSION['user_id'])): ?>
                <a href="/DzHouse%20Property%20Rental%20Website/logout.php">Logout</a>
            <?php else: ?>
                <a href="/DzHouse%20Property%20Rental%20Website/RegistrationPage/RegistrationPage.php">Login</a>
            <?php endif; ?>
            <div class="user-icon">
                <?php if(isset($_SESSION['user_id'])): ?>
                    <a href="<?= $_SESSION['user_type'] === 'tenant' ? '/DzHouse%20Property%20Rental%20Website/TenantAccountPage/TenantAccountPage.php' : '/DzHouse%20Property%20Rental%20Website/OwnerAccountPage/OwnerAccountPage.php' ?>">
                        <img src="/DzHouse%20Property%20Rental%20Website/config/db.php?get_image&id=<?= $_SESSION['user_id'] ?>&type=profile&t=<?= time() ?>" alt="Profile Icon">
                    </a>
                <?php else: ?>
                    <img src="/DzHouse%20Property%20Rental%20Website/assets/user.png" alt="User Icon">
                <?php endif; ?>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="main-content">
        <!-- Booking Form -->
        <div class="booking-form">
            <!-- Contact Information -->
            <div class="form-section">
                <h2 class="section-title">Contact Information:</h2>
                <div class="form-row">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Family name">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group phone-group ">
                        <select class="form-control country-code small">
                            <option value="+1">+1 (USA)</option>
                            <option value="+44">+44 (UK)</option>
                            <option value="+213" selected>+213 (Algeria)</option>
                            <option value="+33">+33 (France)</option>
                            <option value="+91">+91 (India)</option>
                            <option value="+81">+81 (Japan)</option>
                            <option value="+49">+49 (Germany)</option>
                            <option value="+86">+86 (China)</option>
                            <option value="+61">+61 (Australia)</option>
                            <option value="+55">+55 (Brazil)</option>
                        </select>
                        <input type="tel" class="form-control large" placeholder="Phone">
                    </div>
                </div>
            </div>
    
            <!-- Tenant Information -->
            <div class="form-section">
                <h2 class="section-title">Tenant Information:</h2>
                <div class="form-row">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Family name">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group phone-group ">
                        <select class="form-control country-code small">
                            <option value="+1">+1 (USA)</option>
                            <option value="+44">+44 (UK)</option>
                            <option value="+213" selected>+213 (Algeria)</option>
                            <option value="+33">+33 (France)</option>
                            <option value="+91">+91 (India)</option>
                            <option value="+81">+81 (Japan)</option>
                            <option value="+49">+49 (Germany)</option>
                            <option value="+86">+86 (China)</option>
                            <option value="+61">+61 (Australia)</option>
                            <option value="+55">+55 (Brazil)</option>
                        </select>
                        <input type="tel" class="form-control large" placeholder="Phone">
                    </div>
                </div>
                <div class="checkbox-group">
                    <input type="checkbox" id="tenant-not-subscriber">
                    <label for="tenant-not-subscriber" class="checkbox-label">The tenant is not the subscriber</label>
                </div>
            </div>
    
            <!-- Payment Information -->
            <div class="form-section">
                <h2 class="section-title">Payment Information:</h2>
                <div class="form-row">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Family name">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Card number">
                    </div>
                </div>
                <div class="form-row">
                    <div class="form-group">
                        <input type="number" class="form-control" placeholder="Card Code" maxlength="3" title="Please enter exactly 3 digits">
                    </div>
                    <div class="form-group">
                        <input type="month" class="form-control" placeholder="MM/YY" min="2025-01" title="Please select a valid expiration date">
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Property Summary -->
        <div class="property-summary">
            <div class="property-card">
                <img src="/DzHouse%20Property%20Rental%20Website/assets/ListingDetailsPage assets/chambre.jpeg" alt="Apartment bedroom"
                    class="property-image">
                <div class="property-details">
                    <h3 class="property-title">Beautiful university apartment in Villeurbanne</h3>
                    <p class="property-address">106 rue bonnet, Villeurbanne, 69100, Lyon</p>
                    <div class="property-owner">
                        <span>Owner: Masson</span>
                        <span class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </span>
                    </div>
                </div>
            </div>
    
            <div class="pricing-box">
                <div class="price-row">
                    <span class="price-label">Fees / night:</span>
                    <span class="price-value">3000 DA</span>
                </div>
                <div class="total-row">
                    <span class="price-label">Total fees (03 nights):</span>
                    <span class="price-value">9000 DA</span>
                </div>
            </div>
            <!-- Confirm Button -->
            <button class="confirm-button">Confirm Booking</button>
        </div>
    </div>
    
    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-column">
                <h3>About HomeAway</h3>
                <ul class="footer-links">
                    <li><a href="#">Post a Listing</a></li>
                    <li><a href="#">Trust & Safety</a></li>
                    <li><a href="#">Partner Resources</a></li>
                    <li><a href="#">Travel Guides</a></li>
                </ul>
            </div>
    
            <div class="footer-column">
                <h3>Company</h3>
                <ul class="footer-links">
                    <li><a href="#">Who are we?</a></li>
                    <li><a href="#">Affiliation / Contact us</a></li>
                    <li><a href="#">Terms of use</a></li>
                    <li><a href="#">Privacy policy</a></li>
                </ul>
            </div>
    
            <div class="footer-column">
                <h3>Visit our family</h3>
                <ul class="footer-links">
                    <li><a href="#">Vrbo</a></li>
                    <li><a href="#">Abritel.fr</a></li>
                    <li><a href="#">FeWo-direkt.de</a></li>
                    <li><a href="#">Bookabach.co.nz</a></li>
                </ul>
            </div>
        </div>
    </footer>

    <script src="/DzHouse%20Property%20Rental%20Website/BookingPage/BookingPage.js"></script>


</body>
</html>