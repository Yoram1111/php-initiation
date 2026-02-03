<?php

//EXO 2.1
//A
$jour = "Lundi";
switch ($jour) {
    case "lundi":
        echo "Cours de PHP";
        break;
    case "mardi":
        echo "Réunion projet";
        break;
    case "mercredi":
        echo "Travail sur le site web";
        break;
    case "jeudi":
        echo "Cours de design";
        break;
    case "vendredi":
        echo "Sport et détente";
        break;
    case "samedi":
        echo "Sortie entre amis";
        break;
    case "dimanche":
        echo "Repos";
        break;
    default:
        echo "Jour non reconnu";
        break;
}

//B
$jour = "vendredi";
switch ($jour) {
    case "lundi":
    case "mardi":
    case "mercredi":
        echo "Travail sur le site web";
        break;
    case "jeudi":
        echo "Cours de design";
        break;
    case "vendredi":
    case "samedi":
        echo "Chabat";
        break;
    case "dimanche":
        echo "Repos";
        break;
    default:
        echo "Jour non reconnu";
        break;
}

