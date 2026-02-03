<?php

// Minimal Script version
//$students = ["yoram", "etahn", "gianni", "camille", "mehdi", "nathan","karine","mohammed"];
//
//echo $students[array_rand($students, 1)];

// Full Script version
$section = "SIO2B";
$students = [
    "SIO1B" => ["yoram", "etahn", "gianni", "camille", "mehdi", "nathan","karine","mohammed"],
    "SIO1A" => ["julien", "marie", "simon", "laura", "paul", "emma", "lucas", "mathias"],
    "SIO2A" => ["alice", "bob", "charlie", "david", "eve", "frank", "grace", "heidi"],
    "SIO2B" => ["ivan", "judy", "karen", "leo", "mallory", "nancy", "oscar", "peggy"]
];
if(array_key_exists($section, $students)) {
    echo $students[$section][array_rand($students[$section], 1)];
}else{
    echo "Section not found.";
}