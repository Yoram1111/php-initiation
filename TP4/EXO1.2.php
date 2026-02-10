<?php


// Fonction IPv4 simple
function validerIPv4($ip)
{
    $parts = explode('.', $ip);
    return count($parts) == 4;
}

// Fonction pour catégoriser un port
function categoriserPort($port)
{
    if ($port < 1 || $port > 65535) {
        return "invalide";
    } elseif ($port < 1024) {
        return "system";
    } elseif ($port < 49152) {
        return "registered";
    } else {
        return "dynamic";
    }
}

// Tests
echo validerIPv4("192.168.1.1") ? "true\n" : "false\n";
echo validerIPv4("192.168.1") ? "true\n" : "false\n";

echo categoriserPort(80) . "\n";
echo categoriserPort(2000) . "\n";
echo categoriserPort(50000) . "\n";
echo categoriserPort(70000) . "\n";




