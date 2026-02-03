<?php
// 1. Création du tableau $prenoms avec au moins 5 prénoms
$prenoms = ["Yoram", "Sofia", "Lucas", "Emma", "Noah"];

// 2. Affichage de chaque prénom avec son index en utilisant une boucle for
echo "Affichage des prénoms avec leurs index :<br>";
for ($i = 0; $i < count($prenoms); $i++) {
    echo "Index $i : " . $prenoms[$i] . "<br>";
}

// 3. Affichage du nombre total de prénoms
$nombrePrenoms = count($prenoms);
echo "<br>Nombre total de prénoms : $nombrePrenoms<br>";

// 4. Test de l'affichage d'un index qui n'existe pas
$indexInexistant = 10;
echo "<br>Test d'un index qui n'existe pas (index $indexInexistant) : ";
if (isset($prenoms[$indexInexistant])) {
    echo $prenoms[$indexInexistant];
} else {
    echo "Index inexistant !"; // On évite un warning avec isset()
}

?>

