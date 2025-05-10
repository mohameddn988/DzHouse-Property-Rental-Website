<?php
require_once('db.php');

header('Content-Type: application/json');

// Validate request
if (!isset($_SESSION['user_id']) || $_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo json_encode(['success' => false, 'message' => 'Invalid request']);
    exit;
}

try {
    // Verify the user exists
    $stmt = $pdo->prepare("SELECT id, type FROM users WHERE id = ?");
    $stmt->execute([$_SESSION['user_id']]);
    $user = $stmt->fetch();
    
    if (!$user) {
        throw new Exception('User not found');
    }

    // Determine which photo to update (profile or ID)
    $photoType = 'profile'; // Default
    $fileInputName = 'profilePhoto';
    
    // For owners, check if they're uploading ID photo
    if ($user['type'] === 'owner' && isset($_FILES['idPhoto'])) {
        $photoType = 'id';
        $fileInputName = 'idPhoto';
    }

    // Validate file upload
    if (!isset($_FILES[$fileInputName])) {
        throw new Exception('No file uploaded');
    }

    // Validate image
    $fileInfo = getimagesize($_FILES[$fileInputName]['tmp_name']);
    if (!$fileInfo) {
        throw new Exception('Invalid image file');
    }

    // Limit file size (2MB max)
    if ($_FILES[$fileInputName]['size'] > 2097152) {
        throw new Exception('File too large (max 2MB)');
    }

    // Update the appropriate photo column
    $imageData = file_get_contents($_FILES[$fileInputName]['tmp_name']);
    $column = ($photoType === 'id') ? 'id_photo' : 'profile_photo';
    
    $stmt = $pdo->prepare("UPDATE users SET $column = ? WHERE id = ?");
    $stmt->execute([$imageData, $_SESSION['user_id']]);
    
    echo json_encode([
        'success' => true,
        'photoType' => $photoType,
        'userId' => $_SESSION['user_id']
    ]);
} catch (Exception $e) {
    echo json_encode(['success' => false, 'message' => $e->getMessage()]);
}
?>