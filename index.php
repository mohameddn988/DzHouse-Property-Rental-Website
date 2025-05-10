<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DZHouse - Find Your Perfect Stay</title>
    <link rel="stylesheet" href="/DzHouse%20Property%20Rental%20Website/styles.css">
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

    <!-- Hero Section with Search -->
    <div class="hero">
        <div class="search-container">
            <div class="search-input">
                <input type="text" placeholder="Location" class="search-input" >
            </div>
            <div class="search-input">
                <input type="date" placeholder="Dates" class="search-input" >
            </div>
            <div class="search-input">
                <input type="number" placeholder="People" class="search-input">
            </div>
            <button class="search-button" onclick="window.location.href='/DzHouse%20Property%20Rental%20Website/SearchResultsPage/SearchResultsPage.php'">Search</button>
        </div>
    </div>

    <!-- Property Listings -->
    <div class="listings-container">
        <div class="property-grid">
            <!-- Property 1 -->
            <a href="/DzHouse%20Property%20Rental%20Website/ListingDetailsPage/ListingDetailsPage.php" class="property-card">
                <div class="property-image"
                    style="background-image: url(/DzHouse%20Property%20Rental%20Website/assets/property1.jpg)">
                    <button class="heart-button" onclick="event.stopPropagation();">
                        <i class="far fa-heart"></i>
                    </button>
                </div>
                <div class="property-details">
                    <h3 class="property-title">Residential Lyon Part-Dieu</h3>
                    <p class="property-location">La Guillotière</p>
                    <div class="property-rating">
                        <span class="rating-badge">9.5</span>
                        <span class="rating-count">(7 avis)</span>
                    </div>
                    <div class="property-meta">
                        <div class="property-size">22 Mars - 31 May</div>
                        <div class="price-amount">2,629 €</div>
                    </div>
                </div>
            </a>
    
            <!-- Property 2 -->
            <a href="/DzHouse%20Property%20Rental%20Website/ListingDetailsPage/ListingDetailsPage.html" class="property-card">
                <div class="property-image"
                    style="background-image: url(/DzHouse%20Property%20Rental%20Website/assets/property2.jpg)">
                    <button class="heart-button">
                        <i class="far fa-heart"></i>
                    </button>
                </div>
                <div class="property-details">
                    <h3 class="property-title">Tout près de Lyon dans la verdure</h3>
                    <p class="property-location">Jons, Auvergne-Rhône-Alpes</p>
                    <div class="property-rating">
                        <span class="rating-badge">9.7</span>
                        <span class="rating-count">(5 avis)</span>
                    </div>
                    <div class="property-meta">
                        <div class="property-size">22 Mars - 31 May</div>
                        <div class="price-amount">2,629 €</div>
                    </div>
                </div>
            </a>
    
            <!-- Property 3 -->
            <a href="/DzHouse%20Property%20Rental%20Website/ListingDetailsPage/ListingDetailsPage.php" class="property-card">
                <div class="property-image"
                    style="background-image: url(/DzHouse%20Property%20Rental%20Website/assets/property3.jpg)">
                    <button class="heart-button">
                        <i class="far fa-heart"></i>
                    </button>
                </div>
                <div class="property-details">
                    <h3 class="property-title">CROIX ROUSSE CENTER / LYON OPERA / VIEUX LYON / JARDIN /</h3>
                    <p class="property-location">La Croix-Rousse</p>
                    <div class="property-rating">
                        <span class="rating-badge">10</span>
                        <span class="rating-count">(7 avis)</span>
                    </div>
                    <div class="property-meta">
                        <div class="property-size">22 Mars - 31 May</div>
                        <div class="price-amount">2,629 €</div>
                    </div>
                </div>
            </a>
    
            <!-- Property 4 -->
            <a href="/DzHouse%20Property%20Rental%20Website/ListingDetailsPage/ListingDetailsPage.php" class="property-card">
                <div class="property-image"
                    style="background-image: url(/DzHouse%20Property%20Rental%20Website/assets/property4.jpg)">
                    <button class="heart-button">
                        <i class="far fa-heart"></i>
                    </button>
                </div>
                <div class="property-details">
                    <h3 class="property-title">Cokineko - 2 chambres proche Opéra</h3>
                    <p class="property-location">Terreaux</p>
                    <div class="property-rating">
                        <span class="rating-badge">10</span>
                        <span class="rating-count">(9 avis)</span>
                    </div>
                    <div class="property-meta">
                        <div class="property-size">22 Mars - 31 May</div>
                        <div class="price-amount">2,629 €</div>
                    </div>
                </div>
            </a>

            <!-- Property 5 -->
            <a href="/DzHouse%20Property%20Rental%20Website/ListingDetailsPage/ListingDetailsPage.php" class="property-card">
                <div class="property-image"
                    style="background-image: url(/DzHouse%20Property%20Rental%20Website/assets/property4.jpg)">
                    <button class="heart-button">
                        <i class="far fa-heart"></i>
                    </button>
                </div>
                <div class="property-details">
                    <h3 class="property-title">Cokineko - 2 chambres proche Opéra</h3>
                    <p class="property-location">Terreaux</p>
                    <div class="property-rating">
                        <span class="rating-badge">9.8</span>
                        <span class="rating-count">(9 avis)</span>
                    </div>
                    <div class="property-meta">
                        <div class="property-size">22 Mars - 31 May</div>
                        <div class="price-amount">2,629 €</div>
                    </div>
                </div>
            </a>

            
        </div>
    </div>

    <!-- Features Section -->
    <div class="features-section">
        <div class="features-container">
            <div class="feature">
                <div class="feature-icon">
                    <i class="fas fa-shield-alt"></i>
                </div> 
                <h3 class="feature-title">Your reservation is secure</h3>
                <p class="feature-description">
                    Our properties are verified for quality. If your booking doesn't match the description, we'll help you
                    find a solution.
                </p>
            </div>
    
            <div class="feature">
                <div class="feature-icon">
                    <i class="fas fa-home"></i>
                </div>
                <h3 class="feature-title">Find a place that suits you</h3>
                <p class="feature-description">
                    From a studio to a villa, find the perfect place for your next stay at the best price.
                </p>
            </div>
    
            <div class="feature">
                <div class="feature-icon">
                    <i class="fas fa-comment"></i>
                </div>
                <h3 class="feature-title">Trusted community</h3>
                <p class="feature-description">
                    Verified reviews from real travelers. Connect with hosts before, during, and after your stay.
                </p>
            </div>
    
            <div class="feature">
                <div class="feature-icon">
                    <i class="fas fa-map-marker-alt"></i>
                </div>
                <h3 class="feature-title">More places to discover</h3>
                <p class="feature-description">
                    Find your perfect stay among our extensive selection of properties around the world.
                </p>
            </div>
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


    <script src="script.js"></script>
</body>

</html>