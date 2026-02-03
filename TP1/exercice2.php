<?php

// 2.1 Calculatrice simple

//a)Definissez 2 variables
$prix_unitaire = 12.50;
$quantite = 8;

//b) Calculez et afficher


$prix_unitaire = 100;
$quantite = 1;
$tva = 20;

//c)
$prix_total = $prix_unitaire * $quantite;
$montant_tva = $prix_total * $tva / 100;

$prix_ttc = $prix_total + $montant_tva;

// Affichage
echo "Prix total : " . $prix_total . " €<br>";
echo "TVA (20%) : " . $montant_tva . " €<br>";
echo "Prix TTC : " . $prix_ttc . " €<br>";


// 2.2 a) Création des variables
$note1 = 14;
$note2 = 16;

// b) Comparaisons (variables booléennes)
$note1_superieure = ($note1 > $note2);
$notes_egales = ($note1 == $note2);
$note1_suffisante = ($note1 >= 10);

// c) Affichage des résultats avec explications
echo "Note 1 = $note1<br>";
echo "Note 2 = $note2<br><br>";

echo "Note 1 est-elle supérieure à Note 2 ? : " . ($note1_superieure ? "Oui" : "Non") . "<br>";
echo "Les deux notes sont-elles égales ? : " . ($notes_egales ? "Oui" : "Non") . "<br>";
echo "Note 1 est-elle suffisante (>= 10) ? : " . ($note1_suffisante ? "Oui" : "Non") . "<br>";




