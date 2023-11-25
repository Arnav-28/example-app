<?php

/**
 * Calculates the factorial of a given number using a loop.
 *
 * @param int $number The number for which the factorial is to be calculated.
 *
 * @return int The factorial of the given number.
 */
function calculateFactorial($number) {
    // Initialize the result to 1
    $result = 1;

    // Loop through each number from 1 to $number
    for ($i = 1; $i <= $number; $i++) {
        // Multiply the result by the current loop variable
        $result *= $i;
    }

    // Return the calculated factorial
    return $result;
}

// Number for which factorial is to be calculated
$numberToCalculate = 5;

// Calculate factorial
$factorialResult = calculateFactorial($numberToCalculate);

// Display the result
echo "Factorial of $numberToCalculate is: $factorialResult\n";

?>
