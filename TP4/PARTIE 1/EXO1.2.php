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
echo "<h2>Tests Réseau</h2>";

echo "<table border='1' cellpadding='8' cellspacing='0' style='border-collapse:collapse; text-align:center;'>
<tr style='background-color:#f2f2f2; font-weight:bold;'>
    <th>Test</th>
    <th>Entrée</th>
    <th>Résultat</th>
</tr>";

// TEST IPv4
echo "<tr>
        <td>Validation IPv4</td>
        <td>192.168.1.1</td>
        <td>" . (validerIPv4("192.168.1.1") ? "✅ Valide" : "❌ Invalide") . "</td>
      </tr>";

echo "<tr>
        <td>Validation IPv4</td>
        <td>192.168.1</td>
        <td>" . (validerIPv4("192.168.1") ? "✅ Valide" : "❌ Invalide") . "</td>
      </tr>";

// TEST PORTS
echo "<tr>
        <td>Catégorie Port</td>
        <td>80</td>
        <td>" . categoriserPort(80) . "</td>
      </tr>";

echo "<tr>
        <td>Catégorie Port</td>
        <td>2000</td>
        <td>" . categoriserPort(2000) . "</td>
      </tr>";

echo "<tr>
        <td>Catégorie Port</td>
        <td>50000</td>
        <td>" . categoriserPort(50000) . "</td>
      </tr>";

echo "<tr>
        <td>Catégorie Port</td>
        <td>70000</td>
        <td>" . categoriserPort(70000) . "</td>
      </tr>";

echo "</table>";



