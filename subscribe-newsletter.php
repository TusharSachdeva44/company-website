<?php
/**
 * Newsletter Subscription Handler
 * Handles email subscriptions
 */

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Set content type for JSON response
header('Content-Type: application/json');

// Check if request is POST
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Invalid request method, bhai!']);
    exit;
}

// Get and validate email
$email = filter_var(trim($_POST['email'] ?? ''), FILTER_VALIDATE_EMAIL);
if (!$email) {
    http_response_code(400);
    echo json_encode(['success' => false, 'message' => 'Please enter a valid email address, yaar!']);
    exit;
}

// File to store subscribers CSV (absolute path)
$subscribersFile = __DIR__ . './newsletter_subscribers.csv';

// Ensure directory is writable
if (!is_writable(__DIR__)) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Server cannot write to subscriptions folder.']);
    exit;
}

// Create CSV with header if it does not exist
if (!file_exists($subscribersFile)) {
    if (file_put_contents($subscribersFile, "email,timestamp\n") === false) {
        http_response_code(500);
        echo json_encode(['success' => false, 'message' => 'Cannot create subscriber file.']);
        exit;
    }
}

// Append subscriber row
$timestamp = date('Y-m-d H:i:s');
$row = sprintf("%s,%s\n", $email, $timestamp);
if (file_put_contents($subscribersFile, $row, FILE_APPEND | LOCK_EX) === false) {
    http_response_code(500);
    echo json_encode(['success' => false, 'message' => 'Sorry, unable to save your subscription right now.']);
    exit;
}

// Return success response without sending email
echo json_encode([
    'success' => true,
    'message' => 'Dhanyavaad! Aapka email humare records mein jama ho gaya hai.'
]);
exit;
?>
