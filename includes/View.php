<?php

/**
 * View Helper Class
 * 
 * Handles rendering of templates and common view functionality
 */
class View
{
    private static $config;
    
    public static function init($config)
    {
        self::$config = $config;
    }
    
    /**
     * Render the page header with dynamic meta data
     */
    public static function renderHeader($pageTitle = null, $pageDescription = null, $pageKeywords = null, $additionalCss = [])
    {
        $title = $pageTitle ?: self::$config['app']['title'];
        $description = $pageDescription ?: self::$config['app']['description'];
        $keywords = $pageKeywords ?: self::$config['app']['keywords'];
        $themeColor = self::$config['app']['theme_color'];
        
        include __DIR__ . '/../templates/header-template.php';
    }
    
    /**
     * Render the main navigation
     */
    public static function renderNavigation()
    {
        include __DIR__ . '/menu.php';
    }
    
    /**
     * Render the site header section
     */
    public static function renderSiteHeader()
    {
        include __DIR__ . '/header.php';
    }
    
    /**
     * Render the footer
     */
    public static function renderFooter()
    {
        include __DIR__ . '/footer.php';
    }
    
    /**
     * Include a template file with data
     */
    public static function include($template, $data = [])
    {
        extract($data);
        include __DIR__ . "/../templates/{$template}.php";
    }
    
    /**
     * Escape output for security
     */
    public static function escape($string)
    {
        return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
    }
    
    /**
     * Generate asset URLs
     */
    public static function asset($path)
    {
        // Remove leading slash from path to avoid double slashes
        $path = ltrim($path, '/');
        return '/' . $path;
    }
    
    /**
     * Get current page name for navigation
     */
    public static function getCurrentPage()
    {
        return basename($_SERVER['PHP_SELF']);
    }
}
