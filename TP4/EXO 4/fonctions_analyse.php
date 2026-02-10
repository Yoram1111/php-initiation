<?php
/**
 * Fonctions d'analyse de sécurité
 */

/**
 * Calcule le score de sécurité d'une machine
 * @param array $machine Données de la machine
 * @return int Score de sécurité (0-100)
 */
function calculerScoreSecurite($machine) {
    $score = 100; // Score de base

    // Pénalité pour l'âge (au-delà de 5 ans)
    if ($machine['age'] > 5) {
        $anneesExces = $machine['age'] - 5;
        $score -= $anneesExces * 10;
    }

    // Pénalité pour les ports ouverts (au-delà de 2)
    $nbPorts = count($machine['ports_ouverts']);
    if ($nbPorts > 2) {
        $portsExces = $nbPorts - 2;
        $score -= $portsExces * 5;
    }

    // Pénalité pour l'ancienneté du dernier patch
    $datePatch = new DateTime($machine['dernier_patch']);
    $dateActuelle = new DateTime('2025-02-09');
    $diff = $dateActuelle->diff($datePatch);
    $moisDepuisPatch = $diff->y * 12 + $diff->m;

    if ($moisDepuisPatch > 6) {
        $score -= 20;
    } elseif ($moisDepuisPatch > 3) {
        $score -= 10;
    }

    // Le score ne peut pas être négatif
    return max(0, $score);
}

/**
 * Ajoute les scores de sécurité à toutes les machines
 * @param array $machines Tableau de machines
 * @return array Machines avec scores ajoutés
 */
function ajouterScores($machines) {
    foreach ($machines as &$machine) {
        $machine['score_securite'] = calculerScoreSecurite($machine);
    }
    return $machines;
}

/**
 * Trouve la machine la plus vulnérable
 * @param array $machines Tableau de machines avec scores
 * @return array Machine la plus vulnérable
 */
function trouverPlusVulnerable($machines) {
    $plusVulnerable = $machines[0];

    foreach ($machines as $machine) {
        if ($machine['score_securite'] < $plusVulnerable['score_securite']) {
            $plusVulnerable = $machine;
        }
    }

    return $plusVulnerable;
}

/**
 * Compte le nombre de machines critiques (score < 50)
 * @param array $machines Tableau de machines avec scores
 * @return int Nombre de machines critiques
 */
function compterCritiques($machines) {
    $compteur = 0;

    foreach ($machines as $machine) {
        if ($machine['score_securite'] < 50) {
            $compteur++;
        }
    }

    return $compteur;
}

/**
 * Calcule le score moyen du parc
 * @param array $machines Tableau de machines avec scores
 * @return float Score moyen
 */
function obtenirScoreMoyen($machines) {
    $total = 0;

    foreach ($machines as $machine) {
        $total += $machine['score_securite'];
    }

    return $total / count($machines);
}

/**
 * Analyse la fréquence d'utilisation des ports
 * @param array $machines Tableau de machines
 * @return array Tableau associatif port => fréquence
 */
function analyserPorts($machines) {
    $ports = [];

    foreach ($machines as $machine) {
        foreach ($machine['ports_ouverts'] as $port) {
            if (!isset($ports[$port])) {
                $ports[$port] = 0;
            }
            $ports[$port]++;
        }
    }

    return $ports;
}
?>
