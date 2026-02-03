<?php
// ======================
// Validation d'âge - version simple
// ======================

$age1 = -5;
$age2 = 10;
$age3 = 13;
$age4 = 17;
$age5 = 18;
$age6 = 25;
$age7 = 130;

// Fonction pour tester un âge
function verifier_age($age) {
    echo "<strong>Âge testé :</strong> $age ans<br>";

    // Cas particuliers
    if ($age < 0 || $age > 120) {
        echo "❌ Erreur : âge invalide<br><br>";
        return;
    }

    // Exactement 18 ans
    if ($age == 18) {
        echo "🎉 Félicitations pour votre majorité ! Accès autorisé ✅<br><br>";
        return;
    }

    // Catégories d'accès
    if ($age < 13) {
        echo "👶 Accès enfant - Surveillance parentale requise<br><br>";
    } elseif ($age >= 13 && $age <= 17) {
        echo "🧑 Accès mineur - Autorisation parentale nécessaire<br><br>";
    } else { // 19 à 120
        echo "✅ Accès autorisé - Bienvenue<br><br>";
    }
}

// Tester chaque âge individuellement
verifier_age($age1);
verifier_age($age2);
verifier_age($age3);
verifier_age($age4);
verifier_age($age5);
verifier_age($age6);
verifier_age($age7);

?>