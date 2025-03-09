<?php

if (!function_exists('encryptEmail')) {
    function encryptEmail(string $email): string
    {
        // Split the email into local part and domain part
        $parts = explode('@', $email);
        
        // Check if the email is valid
        if (count($parts) !== 2) {
            return $email; // Return the original email if it's not valid
        }

        $name = $parts[0];
        $domain = $parts[1];

        // Show only the first letter of the name and four stars for the rest
        $hiddenName = substr($name, 0, 3) . '****';
        
        // Use the full domain
        $hiddenDomain = $domain;

        return $hiddenName . '@' . $hiddenDomain;
    }
}
