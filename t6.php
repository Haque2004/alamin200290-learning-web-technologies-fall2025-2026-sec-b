<?php
// Define the array
$array = [12, 45, 67, 23, 89, 34, 56];  // You can change the array values

// Define the element to search
$search_element = 67;  // You can change the search element

// Loop through the array
$found = false;
foreach ($array as $element) {
    // Check if the element matches the search element
    if ($element == $search_element) {
        $found = true;
        break;  // Exit the loop once the element is found
    }
}

// Check if the element was found
if ($found) {
    echo "Element " . $search_element . " is found in the array.";
} else {
    echo "Element " . $search_element . " is not found in the array.";
}
?>
