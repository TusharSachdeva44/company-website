<?php
// sendmail.php - Basic PHPMailer usage for contact form

use PHPMailer\PHPMailer\PHPMailer;

require __DIR__ . '/vendor/autoload.php';

// Get POST data
$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$message = $_POST['message'] ?? '';

// Validate required fields
if (!$name || !$email || !$message) {
    exit('All fields required.');
}

// Instead of sending email, store the data in a local file for testing
$data = [
    'name' => $name,
    'email' => $email,
    'message' => $message,
    'time' => date('Y-m-d H:i:s')
];

$file = __DIR__ . '/contact_submissions.json';

// Read existing data
$existing = file_exists($file) ? json_decode(file_get_contents($file), true) : [];
$existing[] = $data;
file_put_contents($file, json_encode($existing, JSON_PRETTY_PRINT));

header('Content-Type: application/json');
echo json_encode(['status' => 'success', 'message' => 'Saved locally.']);
