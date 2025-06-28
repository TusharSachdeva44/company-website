<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/**
 * Mail helper using PHPMailer for SMTP deliveries
 */
class Mail {
    private $mailer;
    private $error;

    public function __construct(array $config) {
        $this->mailer = new PHPMailer(true);
        // enable debug logging if requested
        if (!empty($config['smtp_debug'])) {
            $this->mailer->SMTPDebug = 2; // client and server messages
            $logFile = __DIR__ . '/../smtp_debug.log';
            // clear previous debug log
            @file_put_contents($logFile, '');
            // append new debug messages
            $this->mailer->Debugoutput = function($str, $level) use ($logFile) {
                $line = sprintf("[%s][SMTP DEBUG][%d] %s\n", date('Y-m-d H:i:s'), $level, $str);
                file_put_contents($logFile, $line, FILE_APPEND);
            };
        }
        // SMTP config
        $this->mailer->isSMTP();
        $this->mailer->Host       = $config['smtp_host'];
        $this->mailer->SMTPAuth   = true;
        $this->mailer->Username   = $config['smtp_username'];
        $this->mailer->Password   = $config['smtp_password'];
        $this->mailer->SMTPSecure = $config['smtp_secure'] ?? PHPMailer::ENCRYPTION_STARTTLS;
        $this->mailer->Port       = $config['smtp_port'];
        // From
        $this->mailer->setFrom($config['from_email'], $config['from_name']);
        // set envelope sender for Return-Path
        $this->mailer->Sender = $config['from_email'];
        $this->mailer->addReplyTo($config['reply_to']);
        $this->mailer->isHTML(true);
        $this->mailer->CharSet = 'UTF-8';
    }

    public function send(string $to, string $subject, string $body) {
        try {
            $this->mailer->clearAddresses();
            $this->mailer->addAddress($to);
            $this->mailer->Subject = $subject;
            $this->mailer->Body    = $body;
            return $this->mailer->send();
        } catch (Exception $e) {
            $this->error = $e->getMessage();
            error_log("Mail error: {$e->getMessage()}");
            return false;
        }
    }
    /**
     * Get last error message
     */
    public function getError(): ?string {
        return $this->error;
    }
}
