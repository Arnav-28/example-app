<?php
// Task 3: Fibonacci Sequence

// Function to generate Fibonacci sequence up to n terms
function generateFibonacci($n) {
    $fibonacci = [0, 1];

    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return $fibonacci;
}

// Specify the number of terms in the sequence
$numberOfTerms = 10;

// Output the Fibonacci sequence
echo "Fibonacci Sequence up to $numberOfTerms terms: ";
echo implode(", ", generateFibonacci($numberOfTerms));
?>

