<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DZHouse - Find Your Perfect Stay</title>
    <link rel="stylesheet" href="./AccommodationListingManagementPage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>

<body>
    <!-- Header -->
    <header>
        <a href="/" class="logo">DZHouse</a>
        <div class="nav-links">
            <a href="#">Publish an ad</a>
            <a href="/TenantAccountPage/TenantAccountPage.html">Help</a>
            <a href="/OwnerAccountPage/OwnerAccountPage.html">travels</a>
            <a href="/RegistrationPage/RegistrationPage.html">login </a>
            <div class="user-icon">
                <img src="/assets/user.png" alt="User Icon">
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


    <script src="./AccommodationListingManagementPage.js"></script>
</body>

</html>