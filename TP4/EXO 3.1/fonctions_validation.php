<?php


function validerIPv4($ip)
{
    return filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV4);
}

function categoriserPort($port)
{
    if ($port < 0 || $port > 65535) {
        return "❌ Port invalide";
    }

    if ($port <= 1023) {
        return "Port bien connu";
    }

    if ($port <= 49151) {
        return "Port enregistré";
    }

    return "Port dynamique";
}

function estObsolete($age, $seuil = 5)
{
    return $age >= $seuil;
}

