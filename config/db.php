<?php
session_start();

// Database configuration (XAMPP default)
define('DB_HOST', 'localhost');
define('DB_NAME', 'dzhouse');
define('DB_USER', 'root');
define('DB_PASS', '');

// Establish connection
try {
    $pdo = new PDO(
        "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME . ";charset=utf8mb4",
        DB_USER,
        DB_PASS,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );

    // Handle registration if POST request
    if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user-type'])) {
        header('Content-Type: application/json');
        
        $data = [
            'type' => $_POST['user-type'],
            'name' => $_POST['name'],
            'familyName' => $_POST['familyName'],
            'countryCode' => $_POST['countryCode'],
            'phone' => $_POST['phone'],
            'email' => $_POST['email'],
            'password' => $_POST['password'],
            'address' => $_POST['address'],
            'postalCode' => $_POST['postalCode'],
            'rib' => $_POST['rib'],
            'idPhoto' => $_FILES['idPhoto'] ?? null,
            'profilePhoto' => $_FILES['profilePhoto'] ?? null
        ];
        
        $result = handleRegistration($data);
        echo json_encode($result);
        exit;
    }


} catch (PDOException $e) {
    die("Database connection failed: " . $e->getMessage());
}


// Registration handler
function handleRegistration($data) {
    global $pdo;
    
    // First check if email exists (for both login and registration)
    $stmt = $pdo->prepare("SELECT id, type, password FROM users WHERE email = ?");
    $stmt->execute([$data['email']]);
    $existingUser = $stmt->fetch();

    // LOGIN FLOW (email exists)
    if ($existingUser) {
        // Verify password (plaintext comparison as per your requirement)
        if ($data['password'] === $existingUser['password']) {
            // Set session variables
            $_SESSION['user_id'] = $existingUser['id'];
            $_SESSION['user_type'] = $existingUser['type'];

            return [
                'success' => true,
                'userId' => $existingUser['id'],
                'userType' => $existingUser['type'],
                'action' => 'login'
            ];
        } else {
            return ['success' => false, 'message' => 'Incorrect password'];
        }
    }
    // REGISTRATION FLOW (new user)
    else {
        // Validate required fields
        $required = ['type', 'name', 'email', 'password', 'phone'];
        foreach ($required as $field) {
            if (empty($data[$field])) {
                return ['success' => false, 'message' => "$field is required"];
            }
        }

        // Owner-specific validations
        if ($data['type'] === 'owner') {
            if (empty($_FILES['idPhoto']['tmp_name'])) {
                return ['success' => false, 'message' => 'ID photo is required for owners'];
            }
            if (empty($data['address'])) {
                return ['success' => false, 'message' => 'Address is required for owners'];
            }
        }

        // Handle file uploads
        $profilePhotoData = !empty($_FILES['profilePhoto']['tmp_name']) 
            ? file_get_contents($_FILES['profilePhoto']['tmp_name']) 
            : null;
        
        $idPhotoData = !empty($_FILES['idPhoto']['tmp_name']) 
            ? file_get_contents($_FILES['idPhoto']['tmp_name']) 
            : null;

        // Insert new user
        try {
            $stmt = $pdo->prepare("
                INSERT INTO users 
                (type, name, email, password, phone, profile_photo, id_photo, address, bank_info)
                VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)
            ");
            
            $stmt->execute([
                $data['type'],
                $data['name'] . ' ' . $data['familyName'],
                $data['email'],
                $data['password'], // Stored plaintext (NOT RECOMMENDED)
                $data['countryCode'] . $data['phone'],
                $profilePhotoData,
                $idPhotoData,
                $data['address'] . ', ' . $data['postalCode'],
                $data['rib']
            ]);

            // Set session variables
            $_SESSION['user_id'] = $pdo->lastInsertId();
            $_SESSION['user_type'] = $data['type'];

            return [
                'success' => true,
                'userId' => $pdo->lastInsertId(),
                'userType' => $data['type'],
                'action' => 'register'
            ];
        } catch (PDOException $e) {
            return ['success' => false, 'message' => 'Database error: ' . $e->getMessage()];
        }
    }
}

// Image retrieval endpoint
if (isset($_GET['get_image'])) {
    header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    
    $userId = (int)$_GET['id'];
    $photoType = $_GET['type'] ?? 'profile'; // 'profile' or 'id'
    
    $column = ($photoType === 'id') ? 'id_photo' : 'profile_photo';
    $stmt = $pdo->prepare("SELECT $column FROM users WHERE id = ?");
    $stmt->execute([$userId]);
    $photo = $stmt->fetchColumn();
    
    if ($photo) {
        header("Content-Type: image/jpeg");
        header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
        header("Cache-Control: post-check=0, pre-check=0", false);
        header("Pragma: no-cache");
        echo $photo;
    } else {
        header("Content-Type: image/png");
        readfile(__DIR__.'/../assets/default_' . $photoType . '.png');
    }
    exit;
}