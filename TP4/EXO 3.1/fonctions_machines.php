<?php


function calculerAgeEquipement($annee)
{
    return date("Y") - $annee;
}

function calculerFinGarantie($date, $duree = 3)
{
    $dateFin = new DateTime($date);
    $dateFin->modify("+$duree years");
    return $dateFin->format("Y-m-d");
}

function calculerAgesMoyen($ages)
{
    if (count($ages) === 0) {
        return 0;
    }
    return array_sum($ages) / count($ages);
}

function compterParType($machines)
{
    $resultat = [];

    foreach ($machines as $machine) {
        $type = $machine['type'];

        if (!isset($resultat[$type])) {
            $resultat[$type] = 0;
        }

        $resultat[$type]++;
    }

    return $resultat;
}


