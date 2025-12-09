<?php
// Define the three numbers
$number1 = 12;  // You can change this value
$number2 = 25;  // You can change this value
$number3 = 18;  // You can change this value

// Check which number is the largest
if ($number1 >= $number2 && $number1 >= $number3) {
    echo $number1 . " is the largest number.";
} elseif ($number2 >= $number1 && $number2 >= $number3) {
    echo $number2 . " is the largest number.";
} else {
    echo $number3 . " is the largest number.";
}
?>
