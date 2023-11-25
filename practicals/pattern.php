<?php
// Task 5: Inverted Triangle Pattern

// Specify the number of rows for the inverted triangle
$rows = 5;

// Loop to generate the inverted triangle pattern
for ($i = $rows; $i >= 1; --$i) {
    // Print spaces
    for ($j = $rows - $i; $j > 0; --$j) {
        echo " ";
    }

    // Print asterisks
    for ($j = 2 * $i - 1; $j > 0; --$j) {
        echo "*";
    }

    echo "\n";
}
?>

