<?php
// Shape 1: Stars
for ($i = 1; $i <= 3; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "* ";
    }
    echo "<br>";
}

echo "<br>";

// Shape 2: Numbers
$numbers = [[1,2,3], [1,2], [1]];
foreach ($numbers as $row) {
    foreach ($row as $num) {
        echo $num . " ";
    }
    echo "<br>";
}

echo "<br>";

// Shape 3: Alphabets
$alphabets = [['A'], ['B','C'], ['D','E','F']];
foreach ($alphabets as $row) {
    foreach ($row as $ch) {
        echo $ch . " ";
    }
    echo "<br>";
}
?>