<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DZHouse - Find Your Perfect Stay</title>
    <link rel="stylesheet" href="/DzHouse%20Property%20Rental%20Website/RegistrationPage/RegistrationPage.css">
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
            <a href="/DzHouse%20Property%20Rental%20Website/RegistrationPage/RegistrationPage.php">login </a>
            <div class="user-icon">
                <img src="/DzHouse%20Property%20Rental%20Website/assets/user.png" alt="User Icon">
            </div>
        </div>
    </header>

    <!-- Subscription Form -->
    <main>
        <div class="form-container">
            <h2 class="form-title">Subscription</h2>
            <form id="subscription-form" class="subscription-form">
                <!-- User Type Selection -->
                <div class="radio-group">
                    <div class="radio-option">
                        <input type="radio" id="tenant" name="user-type" value="tenant" checked>
                        <label for="tenant" class="radio-label">
                            <i class="fas fa-user"></i> Tenant
                        </label>
                    </div>
                    <div class="radio-option">
                        <input type="radio" id="owner" name="user-type" value="owner">
                        <label for="owner" class="radio-label">
                            <i class="fas fa-home"></i> Owner
                        </label>
                    </div>
                </div>
        
                <div class="form-row">
                    <input type="text" id="name" placeholder="Name">
                    <input type="text" id="familyName" placeholder="Family name">
                </div>
                
                <div class="form-row phone-row">
                    <select class="small">
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
                    <input type="tel" class="large" placeholder="Phone">
                </div>
                
                <div class="form-row">
                    <input type="email" id="email" placeholder="Email">
                </div>
                
                <div class="form-row">
                    <input type="password" id="password" placeholder="Password">
                </div>
                
                
                <div class="form-row photo-upload-row">
                    <div class="upload-btn">
                        <input type="file" id="profilePhoto" accept="image/*" hidden>
                        <button type="button" onclick="document.getElementById('profilePhoto').click()">
                            Profile photo
                        </button>
                        <span class="file-name" id="profilePhotoName"></span>
                    </div>
                    <div class="upload-btn">
                        <input type="file" id="idPhoto" accept="image/*" hidden>
                        <button type="button" onclick="document.getElementById('idPhoto').click()">
                            ID document photo
                        </button>
                        <span class="file-name" id="idPhotoName"></span>
                    </div>
                </div>

                <div class="form-row sup">
                    <input type="text" id="address" placeholder="Address">
                    <input type="number" id="postalCode" placeholder="Postal code">
                </div>
            
                <div class="form-row">
                    <input type="text" id="rib" placeholder="RIB" >
                </div>
                
                <button type="submit" class="subscribe-btn">Subscribe</button>
            </form>
        </div>
    </main>

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

    <script src="/DzHouse%20Property%20Rental%20Website/RegistrationPage/RegistrationPage.js"></script>
    
</body>
</html>