<?php

// Initial values
$firstNumber = 5;
$secondNumber = 10;

// Displaying values before swapping
echo "Before swapping: firstNumber = $firstNumber, secondNumber = $secondNumber\n";

// Swapping logic without using a function
$temporaryVariable = $firstNumber;
$firstNumber = $secondNumber;
$secondNumber = $temporaryVariable;

// Displaying values after swapping
echo "After swapping: firstNumber = $firstNumber, secondNumber = $secondNumber\n";

?>
