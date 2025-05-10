<!DOCTYPE html>
<html lang="en">

<head>
    <?php session_start(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DZHouse - Find Your Perfect Stay</title>
    <link rel="stylesheet" href="/DzHouse%20Property%20Rental%20Website/SearchResultsPage/SearchResultsPage.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <base href="/DzHouse%20Property%20Rental%20Website/">
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
    
    <!-- Hero Section with Search -->
    <div class="hero">
        <div class="search-container">
            <div class="search-input">
                <input type="text" placeholder="Location" class="search-input">
            </div>
            <div class="search-input">
                <input type="date" placeholder="Dates" class="search-input">
            </div>
            <div class="search-input">
                <input type="number" placeholder="People" class="search-input">
            </div>
            <button class="search-button">Search</button>
        </div>
    </div>

    <div class="main-content">
        <!-- Listings Container -->
        <div class="listings-container">
            <!-- Property 1 -->
            <div class="property-card">
                <div class="property-image">
                    <img src='assets/property1.jpg' alt="Luxury apartment">
                    <div class="image-nav">
                        <button><i class="fas fa-chevron-left"></i></button>
                        <button><i class="fas fa-chevron-right"></i></button>
                    </div>
                    <button class="heart-button">
                        <i class="far fa-heart"></i>
                    </button>
                </div>
                <div class="property-details">
                    <div class="host-label">By: Mounsef Saai</div>
                    <h3 class="property-title">Appartement Luxueux à Hydra</h3>
                    <p class="property-type">Appartement • Appartement de placement • 5</p>
                    <p class="property-features">Plusieurs unités</p>
                        <div class="host-type">
                        <span class="professional">Hôte professionnel</span>
                        <span class="rating">Exceptionnel <span class="rating-score">9.4</span></span>
                        <span class="reviews">2 avis</span>
                    </div>
                    <div class="property-price">
                        <div class="price-amount">543 €</div>
                        <div class="price-period">pour 7 nuits, 1 appartement</div>
                        <div class="price-details">78 € par nuit</div>
                    </div>
                    <a href="#" class="more-info">Sélectionner votre unité d'hébergement <i
                            class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            <!-- Property 1 -->
            <div class="property-card">
                <div class="property-image">
                    <img src="/assets/property1.jpg" alt="Luxury apartment">
                    <div class="image-nav">
                        <button><i class="fas fa-chevron-left"></i></button>
                        <button><i class="fas fa-chevron-right"></i></button>
                    </div>
                    <button class="heart-button">
                        <i class="far fa-heart"></i>
                    </button>
                </div>
                <div class="property-details">
                    <div class="host-label">By: Mounsef Saai</div>
                    <h3 class="property-title">Appartement Luxueux à Hydra</h3>
                    <p class="property-type">Appartement • Appartement de placement • 5</p>
                    <p class="property-features">Plusieurs unités</p>
                        <div class="host-type">
                        <span class="professional">Hôte professionnel</span>
                        <span class="rating">Exceptionnel <span class="rating-score">9.4</span></span>
                        <span class="reviews">2 avis</span>
                    </div>
                    <div class="property-price">
                        <div class="price-amount">543 €</div>
                        <div class="price-period">pour 7 nuits, 1 appartement</div>
                        <div class="price-details">78 € par nuit</div>
                    </div>
                    <a href="#" class="more-info">Sélectionner votre unité d'hébergement <i
                            class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            <!-- Property 1 -->
            <div class="property-card">
                <div class="property-image">
                    <img src="/assets/property1.jpg" alt="Luxury apartment">
                    <div class="image-nav">
                        <button><i class="fas fa-chevron-left"></i></button>
                        <button><i class="fas fa-chevron-right"></i></button>
                    </div>
                    <button class="heart-button">
                        <i class="far fa-heart"></i>
                    </button>
                </div>
                <div class="property-details">
                    <div class="host-label">By: Mounsef Saai</div>
                    <h3 class="property-title">Appartement Luxueux à Hydra</h3>
                    <p class="property-type">Appartement • Appartement de placement • 5</p>
                    <p class="property-features">Plusieurs unités</p>
                        <div class="host-type">
                        <span class="professional">Hôte professionnel</span>
                        <span class="rating">Exceptionnel <span class="rating-score">9.4</span></span>
                        <span class="reviews">2 avis</span>
                    </div>
                    <div class="property-price">
                        <div class="price-amount">543 €</div>
                        <div class="price-period">pour 7 nuits, 1 appartement</div>
                        <div class="price-details">78 € par nuit</div>
                    </div>
                    <a href="#" class="more-info">Sélectionner votre unité d'hébergement <i
                            class="fas fa-chevron-right"></i></a>
                </div>
            </div>
            <!-- Property 1 -->
            <div class="property-card">
                <div class="property-image">
                    <img src="/assets/property1.jpg" alt="Luxury apartment">
                    <div class="image-nav">
                        <button><i class="fas fa-chevron-left"></i></button>
                        <button><i class="fas fa-chevron-right"></i></button>
                    </div>
                    <button class="heart-button">
                        <i class="far fa-heart"></i>
                    </button>
                </div>
                <div class="property-details">
                    <div class="host-label">By: Mounsef Saai</div>
                    <h3 class="property-title">Appartement Luxueux à Hydra</h3>
                    <p class="property-type">Appartement • Appartement de placement • 5</p>
                    <p class="property-features">Plusieurs unités</p>
                        <div class="host-type">
                        <span class="professional">Hôte professionnel</span>
                        <span class="rating">Exceptionnel <span class="rating-score">9.4</span></span>
                        <span class="reviews">2 avis</span>
                    </div>
                    <div class="property-price">
                        <div class="price-amount">543 €</div>
                        <div class="price-period">pour 7 nuits, 1 appartement</div>
                        <div class="price-details">78 € par nuit</div>
                    </div>
                    <a href="#" class="more-info">Sélectionner votre unité d'hébergement <i
                            class="fas fa-chevron-right"></i></a>
                </div>
            </div>
    
        </div>
    
        <!-- Filters Container -->
        <div class="filters-container">
            <div class="sorting-section">
                <h3>Sorting:</h3>
                <select class="sort-dropdown">
                    <option value="recommended">Recommended</option>
                    <option value="price-low">Price: Low to High</option>
                    <option value="price-high">Price: High to Low</option>
                    <option value="rating">Rating</option>
                </select>
            </div>
        
            <div class="filters-section">
                <h3>Filters:</h3>
        
                <div class="filter-group">
                    <label>Accommod type:</label>
                    <select class="filter-dropdown">
                        <option value="all">All Types</option>
                        <option value="apartment">Apartment</option>
                        <option value="house">House</option>
                        <option value="villa">Villa</option>
                    </select>
                </div>
        
                <div class="filter-group">
                    <label>Price range:</label>
                    <div class="price-range">
                        <input type="text" placeholder="Min" class="price-input">
                        <span>,</span>
                        <input type="text" placeholder="Max" class="price-input">
                    </div>
                </div>
        
                <div class="filter-group">
                    <div class="checkbox-group">
                        <input type="checkbox" id="parking">
                        <label for="parking">Parking</label>
                    </div>
                    <div class="checkbox-group">
                        <input type="checkbox" id="wifi">
                        <label for="wifi">Wi-Fi</label>
                    </div>
                    <div class="checkbox-group">
                        <input type="checkbox" id="ac">
                        <label for="ac">Air conditioning</label>
                    </div>
                </div>
            </div>
        
            <div class="map-container">
                <div id="map">
                    <img src="/DzHouse%20Property%20Rental%20Website/assets/SearchResultsPage assets/map.png"
                        alt="Map" class="map-image">
                    <div class="map-controls">
                        <button class="map-control-btn"><i class="fas fa-minus"></i></button>
                        <button class="map-control-btn"><i class="fas fa-plus"></i></button>
                    </div>
                    <div class="map-markers">
                        <div class="map-marker" style="top: 40%; left: 50%;">543 €</div>
                        <div class="map-marker" style="top: 60%; left: 30%;">316 €</div>
                        <div class="map-marker" style="top: 45%; left: 70%;">711 €</div>
                    </div>
                </div>
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
    
    
    <script src="/DzHouse%20Property%20Rental%20Website/SearchResultsPage/SearchResultsPage.js"></script>
</body>
</html>