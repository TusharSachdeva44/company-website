<?php

/**
 * Contact Form Handler
 * 
 * Handles contact form processing, validation, and email sending
 */

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class ContactForm
{
    private $config;
    private $errors = [];
    
    public function __construct($config)
    {
        $this->config = $config;
    }
    
    /**
     * Process the contact form submission
     */
    public function process($data)
    {
        // Validate input
        if (!$this->validate($data)) {
            return ['success' => false, 'errors' => $this->errors];
        }
        
        // Sanitize data
        $sanitizedData = $this->sanitize($data);
        
        // Save to file (for now, replace with database later)
        $this->saveSubmission($sanitizedData);
        
        // Send email (optional)
        // $this->sendEmail($sanitizedData);
        
        return ['success' => true, 'message' => 'Thank you for your message. We will get back to you soon.'];
    }
    
    /**
     * Validate form data
     */
    private function validate($data)
    {
        $this->errors = [];
        
        if (empty($data['name']) || strlen(trim($data['name'])) < 2) {
            $this->errors['name'] = 'Name is required and must be at least 2 characters';
        }
        
        if (empty($data['email']) || !filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors['email'] = 'Valid email address is required';
        }
        
        if (empty($data['message']) || strlen(trim($data['message'])) < 10) {
            $this->errors['message'] = 'Message is required and must be at least 10 characters';
        }
        
        return empty($this->errors);
    }
    
    /**
     * Sanitize form data
     */
    private function sanitize($data)
    {
        return [
            'name' => htmlspecialchars(trim($data['name']), ENT_QUOTES, 'UTF-8'),
            'email' => filter_var(trim($data['email']), FILTER_SANITIZE_EMAIL),
            'message' => htmlspecialchars(trim($data['message']), ENT_QUOTES, 'UTF-8'),
            'submitted_at' => date('Y-m-d H:i:s'),
            'ip_address' => $_SERVER['REMOTE_ADDR'] ?? 'unknown'
        ];
    }
    
    /**
     * Save submission to JSON file
     */
    private function saveSubmission($data)
    {
        $file = APP_ROOT . '/contact_submissions.json';
        
        // Read existing data
        $existing = [];
        if (file_exists($file)) {
            $content = file_get_contents($file);
            $existing = json_decode($content, true) ?: [];
        }
        
        // Add new submission
        $existing[] = $data;
        
        // Save back to file
        file_put_contents($file, json_encode($existing, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE));
    }
    
    /**
     * Send email notification
     */
    private function sendEmail($data)
    {
        $mail = new PHPMailer(true);
        
        try {
            // Server settings
            $mail->isSMTP();
            $mail->Host = $this->config['mail']['smtp_host'];
            $mail->SMTPAuth = true;
            $mail->Username = $this->config['mail']['smtp_username'];
            $mail->Password = $this->config['mail']['smtp_password'];
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port = $this->config['mail']['smtp_port'];
            
            // Recipients
            $mail->setFrom($this->config['mail']['from_email'], $this->config['mail']['from_name']);
            $mail->addAddress($this->config['contact']['email']);
            $mail->addReplyTo($data['email'], $data['name']);
            
            // Content
            $mail->isHTML(true);
            $mail->Subject = 'New Contact Form Submission from ' . $data['name'];
            $mail->Body = $this->generateEmailTemplate($data);
            
            $mail->send();
            return true;
        } catch (Exception $e) {
            error_log("Email sending failed: {$mail->ErrorInfo}");
            return false;
        }
    }
    
    /**
     * Generate email template
     */
    private function generateEmailTemplate($data)
    {
        return "
        <h2>New Contact Form Submission</h2>
        <p><strong>Name:</strong> {$data['name']}</p>
        <p><strong>Email:</strong> {$data['email']}</p>
        <p><strong>Message:</strong></p>
        <p>" . nl2br($data['message']) . "</p>
        <p><strong>Submitted:</strong> {$data['submitted_at']}</p>
        ";
    }
}
