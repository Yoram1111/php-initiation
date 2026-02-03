<?php
// ======================
// INFORMATIONS PERSONNELLES
// ======================
$nom = "Botbol";
$prenom = "Yoram";
$age = 19;
$ville = "Paris";

// ======================
// FORMATION
// ======================
$etablissement = "ORT Montreuil";
$formation = "BTS Informatique";
$annee = "2025-2026";

// ======================
// HOBBIES
// ======================
$hobbies = ["Football", "Basket", "Ping-pong"];

// ======================
// IMC
// ======================
$poids = 70;    // kg
$taille = 1.75; // mètres
$imc = $poids / ($taille * $taille);
$imc = round($imc, 2);

if ($imc < 25) {
    $etat = "IMC inférieur à 25";
} elseif ($imc == 25) {
    $etat = "IMC égal à 25";
} else {
    $etat = "IMC supérieur à 25";
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Profil de <?= $prenom . " " . $nom ?></title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
        }
        .box {
            width: 600px;
            margin: 30px auto;
            background: white;
            padding: 20px;
            border-radius: 10px;
        }
        h1, h2 {
            text-align: center;
        }
    </style>
</head>

<body>

<div class="box">
    <h1>👤 <?= $prenom . " " . $nom ?></h1>

    <h2>Informations personnelles</h2>
    <p>Âge : <?= $age ?> ans</p>
    <p>Ville : <?= $ville ?></p>

    <h2>Formation</h2>
    <p>Établissement : <?= $etablissement ?></p>
    <p>Formation : <?= $formation ?></p>
    <p>Année : <?= $annee ?></p>

    <h2>Hobbies</h2>
    <ul>
        <?php
        foreach ($hobbies as $hobbie) {
            echo "<li>$hobbie</li>";
        }
        ?>
    </ul>

    <h2>Calcul de l'IMC</h2>
    <p>Poids : <?= $poids ?> kg</p>
    <p>Taille : <?= $taille ?> m</p>
    <p>IMC : <?= $imc ?></p>
    <p><?= $etat ?></p>
</div>

</body>
</html>

