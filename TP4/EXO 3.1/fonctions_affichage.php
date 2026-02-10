<?php


function afficherTitre($texte, $niveau = 1)
{
    $niveau = max(1, min(6, $niveau)); // limite entre h1 et h6
    echo "<h$niveau style='font-family:Arial;'>$texte</h$niveau>";
}


function afficherTableauInventaire($machines, $entetes)
{

    echo "<table border='1' cellpadding='10' cellspacing='0'
    style='border-collapse:collapse; font-family:Arial; text-align:center;'>";

    // entêtes
    echo "<tr style='background-color:#333; color:white;'>";
    foreach ($entetes as $entete) {
        echo "<th>$entete</th>";
    }
    echo "</tr>";

    // lignes
    foreach ($machines as $machine) {

        $age = $machine['age'];

        // couleur selon l'âge
        if ($age >= 5) {
            $couleur = "#ffcccc"; // rouge clair -> obsolete
        } elseif ($age >= 3) {
            $couleur = "#fff3cd"; // orange
        } else {
            $couleur = "#d4edda"; // vert
        }

        echo "<tr style='background-color:$couleur;'>";

        foreach ($machine as $valeur) {
            echo "<td>$valeur</td>";
        }

        echo "</tr>";
    }

    echo "</table>";
}

