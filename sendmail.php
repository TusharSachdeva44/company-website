<?php
/**
 * Contact Form Processing Endpoint
 * 
 * Handles AJAX contact form submissions with improved security
 */

require_once __DIR__ . '/includes/bootstrap.php';

// Load configuration
$config = require __DIR__ . '/includes/config.php';

// Initialize View with config
View::init($config);

// Only process POST requests
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'message' => 'Method not allowed']);
    exit;
}

// Process the form
$contactForm = new ContactForm($config);
$result = $contactForm->process($_POST);

// Return JSON response
header('Content-Type: application/json');
echo json_encode($result);
