<?php

/**
 * Generates a Fibonacci sequence.
 *
 * @param int $length The number of terms in the sequence to generate.
 *
 * @return array The generated Fibonacci sequence.
 */
function generateFibonacciSequence($length) {
    // Initialize the sequence with the first two numbers
    $fibonacciSequence = [0, 1];

    // Continue generating the sequence until the desired length is reached
    while (count($fibonacciSequence) < $length) {
        // Calculate the next number in the sequence
        $nextNumber = $fibonacciSequence[count($fibonacciSequence) - 1] + $fibonacciSequence[count($fibonacciSequence) - 2];

        // Add the next number to the sequence
        $fibonacciSequence[] = $nextNumber;
    }

    return $fibonacciSequence;
}

// Number of terms in the sequence
$numberOfTerms = 10;

// Generate and display the Fibonacci sequence
$fibonacciSequence = generateFibonacciSequence($numberOfTerms);

// Display the generated sequence with a message
echo "Fibonacci Sequence (first $numberOfTerms terms): " . implode(", ", $fibonacciSequence) . "\n";

?>
