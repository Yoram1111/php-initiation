<?php

// 1. Mes premieres variables

//A) Creer des variables
$mon_prenom = "Yoram";
$mon_age = 19;
$ma_taille = 1.75;
$suis_etudiant = true;

// Affichage des variables
echo $mon_prenom . "<br>";
echo $mon_age . "<br>";
echo $ma_taille . "<br>";
echo $suis_etudiant . "<br><br>";

// b) Affichage du type de chaque variable
echo gettype($mon_prenom) . "<br>";
echo gettype($mon_age) . "<br>";
echo gettype($ma_taille) . "<br>";
echo gettype($suis_etudiant) . "<br><br>";

// c) Variable présentation
$presentation = "Je m'appelle $mon_prenom, j'ai $mon_age ans, je mesure {$ma_taille}m et je suis étudiant.";
echo $presentation;


// 1.2 Manipulation des types


// a) Création des variables
$nombre1 = "15"; // chaîne
$nombre2 = 25;   // entier

// b) Affichage des types
echo "<br><br>";
echo gettype($nombre1) . "<br>";
echo gettype($nombre2) . "<br>";

// c) Addition
$resultat = $nombre1 + $nombre2;
echo $resultat;
?>

