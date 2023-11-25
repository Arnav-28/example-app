<?php
// Task 4: Factorial of a Number

// Function to calculate the factorial of a number
function calculateFactorial($number) {
    if ($number === 0 || $number === 1) {
        return 1;
    } else {
        return $number * calculateFactorial($number - 1);
    }
}

// Specify the number for which to calculate the factorial
$numberToFactorial = 5;

// Output the factorial of the specified number
echo "Factorial of $numberToFactorial: " . calculateFactorial($numberToFactorial);
?>

