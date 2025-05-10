<!DOCTYPE html>
<html lang="en">
<head>
    <?php session_start(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beautiful university apartment in Villeurbanne - DZHouse</title>
    <link rel="stylesheet" href="/DzHouse%20Property%20Rental%20Website/ListingDetailsPage/ListingDetailsPage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
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
                <?php endif; ?>            </div>
        </div>
    </header>

    <!-- Gallery section -->
    <section class="gallery">
        <div class="gallery-container">
            <div class="main-image">
                <img src="../assets/ListingDetailsPage assets/sallon.jpeg" alt="Living room">
                <button class="nav-btn left"><i class="fas fa-chevron-left"></i></button>
            </div>
            <div class="side-images">
                <div class="side-image">
                    <img src="../assets/ListingDetailsPage assets/chambre.jpeg" alt="Bathroom">
                </div>
                <div class="side-image">
                    <img src="../assets/ListingDetailsPage assets/cuisine.jpeg" alt="Kitchen">
                </div>
                <div class="side-image">
                    <img src="../assets/ListingDetailsPage assets/bathroom.jpeg" alt="Bedroom">
                    <div class="image-count">
                        <i class="fas fa-camera"></i>
                    </div>
                </div>
            </div>
        </div>
        <div class="social-buttons">
            <button class="share-btn"><i class="fas fa-share-alt"></i> Partager</button>
            <button class="save-btn"><i class="far fa-heart"></i> Sauvegarder</button>
        </div>
    </section>

    <section class="properties">
        <!-- Property Title -->
        <h1 class="property-title">Beautiful university apartment in Villeurbanne</h1>
        <p class="property-address">106 rue bonnet, Villeurbanne, 69100, Lyon</p>
        <div class="property-owner">
            <span>Owner: Masson</span>
            <span class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="far fa-star"></i>
            </span>
        </div>

        <!-- Property Details -->
        <div class="property-details">
            <div class="details-left">
                <h2 class="section-title">About this accommodation</h2>
                <p class="property-description">
                    A smoke-free apartment featuring laundry facilities and a fully equipped kitchen with a refrigerator, oven,
                    stovetop, and microwave. It includes a washer/dryer, a separate dining area, and entertainment options such
                    as cable TV and Netflix.
                </p>
        
                <h2 class="section-title">Rules and access method</h2>
                <ul class="rules-list">
                    <li>- Check-in start time: 15:00; Check-in end time: 23:00.</li>
                    <li>- Minimum check-in age: 23 years</li>
                    <li>- Check-out before 10:00</li>
                    <li>- You will receive an email with check-in instructions and key collection information.</li>
                </ul>
        
                
            </div>
        
            <div class="details-right">
                <div class="amenities-list">
                    <div class="amenity">
                        <div class="amenity-icon">
                            <i class="fas fa-parking"></i>
                        </div>
                        <span>Parking disponible</span>
                    </div>
                    <div class="amenity">
                        <div class="amenity-icon">
                            <i class="fas fa-fire"></i>
                        </div>
                        <span>Barbecue</span>
                    </div>
                    <div class="amenity">
                        <div class="amenity-icon">
                            <i class="fas fa-snowflake"></i>
                        </div>
                        <span>Climatisation</span>
                    </div>
                </div>
        
                <button class="reviews-button">
                    Click to see user reviews <i class="fas fa-chevron-down"></i>
                </button>

                <div class="booking-section">
                    <div class="instant-booking">
                        <span>👍</span> Instant booking !
                    </div>
                    <button class="booking-button" onclick="window.location.href='/DzHouse%20Property%20Rental%20Website/BookingPage/BookingPage.php'">Booking</button>
                </div>
            </div>
        </div>
    </section>

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

    <script src="/DzHouse%20Property%20Rental%20Website/ListingDetailsPage/ListingDetailsPage.js"></script>
</body>
</html>