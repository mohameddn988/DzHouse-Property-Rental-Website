<!DOCTYPE html>
<html lang="en">

<head>
    <?php session_start(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DZHouse - Find Your Perfect Stay</title>
    <link rel="stylesheet" href="/DzHouse%20Property%20Rental%20Website/TenantAccountPage/TenantAccountPage.css">
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
                <img src="/DzHouse%20Property%20Rental%20Website/assets/user.png" alt="User Icon">
            </div>
        </div>
    </header>


    <!-- Main Content -->
    <div class="main-content">
        <!-- Left Column -->
        <div class="left-column">
            <!-- Profile Panel -->
            <div class="panel">
                <div class="panel-header">Profile:</div>
                <div class="panel-body">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Family name">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" placeholder="Phone">
                    </div>
                    
                    <div class="photo-buttons">
                        <img src="/DzHouse%20Property%20Rental%20Website/assets/user.png" alt="">
                        <button class="photo-button">Profile photo</button>
                    </div>
                </div>
            </div>
    
            <!-- Contact Tenant Panel -->
            <div class="panel">
                <div class="panel-header">Contact owner:</div>
                <div class="panel-body">
                    <div class="chat-container">
                        <div class="chat-messages">
                            <div class="message sent">
                                Hello, I can't find the keys
                            </div>
                            <div class="message received">
                                use the key box
                                
                            </div>
                        </div>
                        <div class="chat-input">
                            <input type="text" class="form-control" placeholder="type a message ...">
                            <button class="btn btn-primary">Send</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    
        <!-- Right Column -->
        <div class="right-column">
            <!-- Properties Panel -->
            <div class="panel">
                <div class="panel-body">
                    <div class="property-table">
                        <div class="property-table-header">
                            <div class="property-cell">House</div>
                            <div class="property-cell state">State</div>
                            <div class="property-cell review">Review</div>
                        </div>
                        <div class="property-row">
                            <div class="property-cell">Le byon japonais de Lyon</div>
                            <div class="property-cell state">
                                <span class="status-badge archived">Archived</span>
                            </div>
                            <div class="property-cell review">
                                <button class="add-review-btn">+</button>
                            </div>
                        </div>
                        <div class="property-row">
                            <div class="property-cell">
                                Family name
                            </div>
                            <div class="property-cell state">
                                <span class="status-badge pending">Pending</span>
                            </div>
                            <div class="property-cell review">
                                <button class="add-review-btn">+</button>
                            </div>
                        </div>
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


    <script src="/DzHouse%20Property%20Rental%20Website/TenantAccountPage/TenantAccountPage.js"></script>
</body>

</html>