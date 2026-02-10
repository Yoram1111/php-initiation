//EXO 2.1

<?php


// 1. Moyenne des âges
function calculerAgesMoyen($equipements)
{
    return array_sum($equipements) / count($equipements);
}

// 2. Plage d'âges
function obtenirPlageAges($equipements)
{
    return [
        "min" => min($equipements),
        "max" => max ($equipements)
    ];
}

// 3. Compter les équipements obsolètes
function compterObsoletes($ages, $seuil = 5)
{
    $compteur = 0;
    foreach ($ages as $age) {
        if ($age >= $seuil) {
            $compteur++;
        }
    }
    return $compteur;
}

// 4. Analyse du parc
function analyserParc($equipements)
{
    return [
        "age_moyen" => calculerAgesMoyen($equipements),
        "plus_ancien" => max($equipements),
        "plus_recent" => min($equipements),
        "obsoletes" => compterObsoletes($equipements)
    ];
}

// Test
$equipements = [2, 4, 6, 8, 3];

print_r(analyserParc($equipements));

?>






//EXO 2.2
<?php

// 1. Filtrer les machines par type
function filtrerParType($machines, $typeRecherche){
    $resultat = [];

    foreach($machines as $machine){
        if($machine['type'] === $typeRecherche){
            $resultat[] = $machine;
        }
    }

    return $resultat;
}

// 2. Trouver une machine par IP
function trouverParIP($machines, $ip){
    foreach($machines as $machine){
        if($machine['ip'] === $ip){
            return $machine;
        }
    }
    return null; // pas trouvé
}

// 3. Compter les machines par type
function compterParType($machines){
    $compte = [];

    foreach($machines as $machine){
        $type = $machine['type'];
        if(!isset($compte[$type])){
            $compte[$type] = 0;
        }
        $compte[$type]++;
    }

    return $compte;
}

?>

