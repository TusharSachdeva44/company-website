<?php

/**
 * Contact Form Processing Endpoint
 * 
 * Handles AJAX contact form submissions
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

// CSRF protection (basic)
session_start();
if (!isset($_POST['csrf_token']) || $_POST['csrf_token'] !== ($_SESSION['csrf_token'] ?? '')) {
    http_response_code(403);
    header('Content-Type: application/json');
    echo json_encode(['success' => false, 'message' => 'Invalid request']);
    exit;
}

// Process the form
$contactForm = new ContactForm($config);
$result = $contactForm->process($_POST);

// Return JSON response
header('Content-Type: application/json');
echo json_encode($result);
