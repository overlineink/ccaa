<?php
    class Contacts extends Model {

        # Construct
        public function __construct($_table = '') {
            parent::__construct($_table);
        }

        public function sendMail ($name, $from, $subject, $message) {
            # Defining constants
            define('TO', 'inkd0048@gmail.com');
            # Eol config
            if (strtoupper(substr(PHP_OS,0,3)=='WIN')) { 
                $eol="\r\n"; 
            } elseif (strtoupper(substr(PHP_OS,0,3)=='MAC')) { 
                $eol="\r"; 
            } else { 
                $eol="\n"; 
            }
            # Get headers elements
            $headers = "From: {$name} <{$from}>" . "\r\n" .
                "Reply-To: {$from}" . "\r\n" .
                "Message date: " . date("d \de F Y h:i:s A");
            # Send the email
            if (!empty($message) && !empty($from) && !empty($name)) {
                mail(TO, $subject, $message, $headers);
                return true; 
            }
            return false; 
        }
    }