<!DOCTYPE html>
<html lang="en">

<head>
    <?php session_start(); ?>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DZHouse - Find Your Perfect Stay</title>
    <link rel="stylesheet" href="/DzHouse%20Property%20Rental%20Website/OwnerAccountPage/OwnerAccountPage.css">
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
                        <input type="text" class="form-control" placeholder="Adress">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" placeholder="Phone">
                    </div>
                    
                    <div class="photo-buttons">
                        <button class="photo-button">ID photo</button>
                        <button class="photo-button">Profile photo</button>
                    </div>
                </div>
            </div>
    
            <!-- Contact Tenant Panel -->
            <div class="panel">
                <div class="panel-header">Contact tenant:</div>
                <div class="panel-body">
                    <div class="chat-container">
                        <div class="chat-messages">
                            <div class="message received">
                                Hello, I can't find the keys
                            </div>
                            <div class="message sent">
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
            <!-- Announcements Panel -->
            <div class="panel">
                <div class="panel-header">
                    <span>Announcements:</span>
                    <button class="btn btn-success">+</button>
                </div>
                <div class="panel-body">
                    <div class="table-row">
                        <div class="table-cell id">#</div>
                        <div class="table-cell">Announcement</div>
                        <div class="table-cell">Updates</div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell id">20301</div>
                        <div class="table-cell">Le byon japonais de Lyon</div>
                        <div class="table-cell actions">
                            <button class="action-btn delete"><i class="fas fa-times"></i></button>
                            <button class="action-btn edit"><i class="fas fa-pencil-alt"></i></button>
                        </div>
                    </div>
                </div>
            </div>
    
            <!-- Booking Requests Panel -->
            <div class="panel">
                <div class="panel-header">Booking requests:</div>
                <div class="panel-body">
                    <div class="table-row">
                        <div class="table-cell">Tenant</div>
                        <div class="table-cell">Announcement</div>
                        <div class="table-cell">Res state</div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell id">30567</div>
                        <div class="table-cell">Modern Apartment in Paris</div>
                        <div class="table-cell actions">
                            <button class="action-btn approve"><i class="fas fa-check"></i></button>
                            <button class="action-btn delete"><i class="fas fa-times"></i></button>
                        </div>
                    </div>
                    <div class="table-row">
                        <div class="table-cell id">40892</div>
                        <div class="table-cell">Cozy Cottage in Provence</div>
                        <div class="table-cell actions">
                            <button class="action-btn approve"><i class="fas fa-check"></i></button>
                            <button class="action-btn delete"><i class="fas fa-times"></i></button>
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


    <script src="/DzHouse%20Property%20Rental%20Website/OwnerAccountPage/OwnerAccountPage.js"></script>
</body>

</html>