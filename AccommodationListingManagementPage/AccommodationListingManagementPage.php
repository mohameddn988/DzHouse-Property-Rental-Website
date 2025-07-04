<!DOCTYPE html>
<html lang="en">

<head>
    <?php session_start(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DZHouse - Find Your Perfect Stay</title>
    <link rel="stylesheet" href="/DzHouse%20Property%20Rental%20Website/AccommodationListingManagementPage/AccommodationListingManagementPage.css">
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

    <!-- Announcement Form -->
    <div class="form-container">
        <h2 class="form-title">New / Update Announcement</h2>
    
        <form id="announcement-form">
            <!-- Property Information -->
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Name" required>
            </div>
    
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Address" required>
            </div>
    
            <div class="form-row">
                <div class="form-group" style="flex: 1;">
                    <input type="number" class="form-control" placeholder="Postal code" required>
                </div>
                <div class="form-group" style="flex: 2;">
                    <select class="form-select" required>
                        <option value="" disabled selected>Type</option>
                        <option value="apartment">Apartment</option>
                        <option value="house">House</option>
                        <option value="villa">Villa</option>
                        <option value="studio">Studio</option>
                    </select>
                </div>
            </div>
    
            <div class="form-row">
                <div class="form-group" style="flex: 1;">
                    <button type="button" class="btn btn-secondary" id="photos-btn">Photos</button>
                </div>
                <div class="form-group" style="flex: 2;">
                    <select class="form-select" required>
                        <option value="" disabled selected>Booking method</option>
                        <option value="instant">Instant booking</option>
                        <option value="request">Request to book</option>
                        <option value="contact">Contact owner first</option>
                    </select>
                </div>
            </div>
    
            <!-- Amenities -->
            <div class="checkbox-group">
                <div class="checkbox-container">
                    <input type="checkbox" id="parking">
                    <label for="parking" class="checkbox-label">Parking</label>
                </div>
                <div class="checkbox-container">
                    <input type="checkbox" id="wifi">
                    <label for="wifi" class="checkbox-label">wifi</label>
                </div>
                <div class="checkbox-container">
                    <input type="checkbox" id="air-conditioning">
                    <label for="air-conditioning" class="checkbox-label">Air conditioning</label>
                </div>
                <div class="checkbox-container">
                    <input type="checkbox" id="balcony">
                    <label for="balcony" class="checkbox-label">Balcony</label>
                </div>
            </div>
    
            <!-- Submit Button -->
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
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


    <script src="/DzHouse%20Property%20Rental%20Website/AccommodationListingManagementPage/AccommodationListingManagementPage.js"></script>
</body>

</html>