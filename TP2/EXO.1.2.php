<?php
//EXO 1.2
//A
$nombre1 = 5;
$nombre2 = 0;
$operation = "*";


if ($operation == "+") {
    $resultat = $nombre1 + $nombre2;
    echo "$nombre1 + $nombre2 = $resultat";

} elseif ($operation == "-") {
    $resultat = $nombre1 - $nombre2;
    echo "$nombre1 - $nombre2 = $resultat";

} elseif ($operation == "*") {
    $resultat = $nombre1 * $nombre2;
    echo "$nombre1 * $nombre2 = $resultat";

} elseif ($operation == "/") {
    // Vérification pour éviter la division par zéro
    if ($nombre2 == 0) {
        echo "Erreur : division par zéro impossible !";
    } else {
        $resultat = $nombre1 / $nombre2;
        echo "$nombre1 / $nombre2 = $resultat";
    }

} else {
    echo "Erreur : opération non reconnue !";
}

?>