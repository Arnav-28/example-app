<?php

$numberOfRows = 5;

// Loop through each row
for ($currentRow = $numberOfRows; $currentRow >= 1; $currentRow--) {

    // Print asterisks for the current row
    for ($asteriskCount = 0; $asteriskCount <= $currentRow - 1; $asteriskCount++) {
        echo "*";
    }

    // Move to the next line after completing the row
    echo "\n";
}

?>
