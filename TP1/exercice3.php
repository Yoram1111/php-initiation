<?php
// 3.1 Construction de phrases

// a) Création des variables
$nom = "Dupont";
$prenom = "Marie";
$ville = "Lyon";
$code_postal = "69000";

// b) Concaténation et affichage
echo "Bonjour " . $prenom . " " . $nom . " !<br>";
echo "Vous habitez à " . $ville . " (" . $code_postal . ")<br>";
echo "Votre nom complet est " . strtoupper($nom) . " " . $prenom . "<br><br>";

// c) Adresse complète
$adresse_complete = "Bonjour " . $prenom . " " . $nom .
    ", vous habitez à " . $ville .
    " (" . $code_postal . ").";

echo $adresse_complete . "<br><br>";

// 3.2 Calculs avec chaînes

// a) Chiffre de ventes (chaîne de caractères)
$chiffre_ventes = "15000";

// b) Calcul de l'objectif (+20 %)
$objectif = $chiffre_ventes * 1.20;

// c) Affichage du résultat
echo "Ventes actuelles : " . $chiffre_ventes . " € - Objectif : " . $objectif . " €";


