<?php

/**
 * Application Bootstrap
 * 
 * This file initializes the application environment, loads configuration,
 * and sets up common functionality shared across all pages.
 */

// Autoload Composer dependencies
require_once __DIR__ . '/../vendor/autoload.php';

// Start session management
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Set error reporting for development
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Define application constants
define('APP_ROOT', dirname(__DIR__));
define('ASSETS_URL', '/assets');
define('CSS_URL', '/css');
define('JS_URL', '/js');
define('IMAGES_URL', '/images');

// Load application configuration
require_once __DIR__ . '/config.php';

// Load core classes
require_once __DIR__ . '/View.php';
require_once __DIR__ . '/ContactForm.php';
require_once __DIR__ . '/PageData.php';
