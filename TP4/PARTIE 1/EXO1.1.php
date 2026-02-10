<?php

//1
function CalculerAgeEquipement($AnneAchat){
    $anneeCourante = 2025;
    return $anneeCourante - $AnneAchat;
}


//2
function calculerFinGarantie($dateAchat , $dureeGarantie = 3){
    $date = new DateTime($dateAchat);
    $date ->modify('+'.$dureeGarantie.' year');
    return $date->format('Y-m-d');
}


//3
function estObsolete($age , $seuilObsolescence = 5){
    return $age > $seuilObsolescence;
}

//4
function genererCodeInventaire($type, $numero) {
    switch(strtolower($type)) {
        case "serveur":
            return "SRV-{$numero}";
        case "workstation":
            return "WKS-{$numero}";
        case "network":
            return "NET-{$numero}";
        default:
            return "UNK-{$numero}";
    }
}


//5
echo "<pre>"; // garde l'alignement

echo "===== TEST AGE =====\n";
echo calculerAgeEquipement(2020) . "\n\n";

echo "===== TEST GARANTIE =====\n";
echo calculerFinGarantie("2021-05-10") . "\n";
echo calculerFinGarantie("2019-03-15", 5) . "\n\n";

echo "===== TEST OBSOLETE =====\n";
echo estObsolete(6) . "\n";
echo estObsolete(3) . "\n\n";

echo "===== TEST INVENTAIRE =====\n";
echo genererCodeInventaire("serveur", 1) . "\n";
echo genererCodeInventaire("workstation", 2) . "\n";
echo genererCodeInventaire("network", 3) . "\n";
echo genererCodeInventaire("autre", 4) . "\n";

echo "</pre>";
