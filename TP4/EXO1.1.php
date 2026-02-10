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
echo "===Tests===\n";

//TEST AGE
echo calculerAgeEquipement(2020) . "\n";

//TEST GARANTIE
echo calculerFinGarantie("2021-05-10") . "\n";
echo calculerFinGarantie("2019-03-15", 5) . "\n";

//TEST OBSOLTE
echo estObsolete(6) . "\n";
echo estObsolete(3) . "\n";

//TEST INVENTAIRE
echo genererCodeInventaire("serveur", 1) . "\n";
echo genererCodeInventaire("workstation", 2) . "\n";
echo genererCodeInventaire("network", 3) . "\n";
echo genererCodeInventaire("autre", 4) . "\n";
