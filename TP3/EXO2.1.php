<?php

$utilisateur = [
    "nom"=>"Doe",
    "prenom"=>"John",
    "age"=>30,
    "email"=>"j.doe mail.Dev",
    "ville"=>"Paris"
];

foreach ($utilisateur as $cle => $valeur) {
    echo "$cle : $valeur<br>";
}
echo "<br>";
$utilisateur["telephone"] =  "0102030405";

foreach ($utilisateur as $cle => $valeur) {
    echo "$cle : $valeur<br>";
}

echo "<br>";

$utilisateur["age"] =  "19";

foreach ($utilisateur as $cle => $valeur) {
    echo "$cle : $valeur<br>";
}
echo "<br>";

unset($utilisateur["email"]);
foreach ($utilisateur as $cle => $valeur) {
    echo "$cle : $valeur<br>";
}
