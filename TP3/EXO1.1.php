<?php

$array = ["julien","marie","simon","laura","paul"];

function loop($array) {
    echo "<br>";
    for ($i = 0; $i < count($array); $i++) {
        if($i == 0) {
            echo $i ." : ". $array[$i];;
        } else {
            echo " ; ".$i ." : ". $array[$i];;
        }
    }
    echo "<br>";
    // Alternative way to display the array
    // by joining elements with " - " in a new string
    // echo implode(" - ",$array);
    // echo "<br>";
}


// Debugging array
//var_dump($array);

// Display each element of the array using a for loop
loop($array);

// Display the length of the array
echo "Length of the array: " . count($array) . "<br>";

// Add a new firstname to the array
$array[] = "emma";
loop($array);

// Add a new firstname at the beginning of the array
array_unshift($array, "lucas");
loop($array);

// Remove the last firstname from the array and display it
$removedLast = array_pop($array);
echo "<br>Removed last firstname: " . $removedLast . "<br>";
loop($array);

// Check a value is in the array
$search = "Mathias";
// Ternary operator way
// echo in_array($search, $array) ? "<br>" . $search . " is in the array.<br>" : "<br>" . $search . " is not in the array.<br>";

// Standard way
if(in_array($search, $array)) {
    echo "<br>" . $search . " is in the array.<br>";
} else {
    echo "<br>" . $search . " is not in the array.<br>";
}

// Order the array in alphabetical order
sort($array);
echo "<br>Array sorted in alphabetical order:";
loop($array);