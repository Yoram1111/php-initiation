<?php
// INFORMATIONS PERSONNELLES
// ======================
$prenom = "Marie";
$nom = "Dupont";
$annee_naissance = 1998;
$ville = "Lyon";

// ======================
// INFORMATIONS PROFESSIONNELLES
// ======================
$poste = "Développeuse Web";
$entreprise = "TechSolutions";
$secteur = "Informatique";
$annee_debut_experience = 2018;
$annee_entree_entreprise = 2021;

// ======================
// COORDONNÉES
// ======================
$telephone = "06 12 34 56 78";
$email = "marie.dupont@email.com";
$adresse = "10 rue de la République, 69000 Lyon";

// ======================
// COMPÉTENCES (pourcentage de maîtrise)
// ======================
$competences = [
    "HTML / CSS" => 90,
    "PHP" => 80,
    "JavaScript" => 75,
    "MySQL" => 70
];

// ======================
// CALCULS
// ======================
$annee_actuelle = date("Y");

$age = $annee_actuelle - $annee_naissance;
$experience = $annee_actuelle - $annee_debut_experience;
$anciennete = $annee_actuelle - $annee_entree_entreprise;

// Moyenne des compétences
$moyenne_competences = array_sum($competences) / count($competences);

// Disponibilité
$disponible = true;

// Slogan
$slogan = $poste . " passionnée dans le secteur " . $secteur;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Carte de visite</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .carte {
            width: 400px;
            background-color: white;
            margin: 40px auto;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 0 10px rgba(0,0,0,0.2);
        }
        h1 {
            text-align: center;
            margin-bottom: 5px;
        }
        .slogan {
            text-align: center;
            font-style: italic;
            color: #555;
        }
        hr {
            margin: 15px 0;
        }
        .section {
            margin-bottom: 10px;
        }
        .dispo {
            font-weight: bold;
            color: green;
        }
        .occupe {
            color: red;
        }
    </style>
</head>

<body>

<div class="carte">
    <h1>👩‍💻 <?= $prenom . " " . strtoupper($nom) ?></h1>
    <p class="slogan">✨ <?= $slogan ?></p>

    <hr>

    <div class="section">
        <strong>📍 Ville :</strong> <?= $ville ?><br>
        <strong>🎂 Âge :</strong> <?= $age ?> ans
    </div>

    <div class="section">
        <strong>🏢 Poste :</strong> <?= $poste ?><br>
        <strong>🏭 Entreprise :</strong> <?= $entreprise ?><br>
        <strong>📊 Expérience :</strong> <?= $experience ?> ans<br>
        <strong>⏳ Ancienneté :</strong> <?= $anciennete ?> ans
    </div>

    <div class="section">
        <strong>📞 Téléphone :</strong> <?= $telephone ?><br>
        <strong>📧 Email :</strong> <?= $email ?><br>
        <strong>🏠 Adresse :</strong> <?= $adresse ?>
    </div>

    <div class="section">
        <strong>🛠️ Compétences :</strong><br>
        <?php
        foreach ($competences as $nom_competence => $niveau) {
            echo "- $nom_competence : $niveau %<br>";
        }
        ?>
        <strong>📈 Maîtrise moyenne :</strong> <?= round($moyenne_competences) ?> %
    </div>

    <div class="section">
        <strong>📅 Disponibilité :</strong>
        <span class="<?= $disponible ? 'dispo' : 'occupe' ?>">
            <?= $disponible ? "Disponible" : "Occupé(e)" ?>
        </span>
    </div>
</div>

</body>
</html>
