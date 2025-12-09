<?php
// Declare the 2D array
$array = [
    [1, 2, 3, 'A'],
    [1, 2, 'B', 'C'],
    [1, 'D', 'E', 'F']
];

// Shape 1: Numbers
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3 - $i; $j++) { // decreasing numbers
        echo $array[$i][$j] . " ";
    }
    echo "<br>";
}

echo "<br>";

// Shape 2: Alphabets
for ($i = 0; $i < 3; $i++) {
    for ($j = 3 - $i; $j < 4; $j++) { // alphabets start from column index 3-i
        echo $array[$i][$j] . " ";
    }
    echo "<br>";
}
?>