<?php

/**
 * Class Practical
 * Contains static functions for practical tasks.
 */
class Practical
{
    /**
     * Print "Hello, World!"
     */
    public static function printHello()
    {
        echo "Hello, World!\n";
    }

    /**
     * Add two numbers.
     *
     * @param int|float $num1 The first number.
     * @param int|float $num2 The second number.
     *
     * @return int|float The sum of the two numbers.
     */
    public static function add($num1, $num2)
    {
        return $num1 + $num2;
    }

    /**
     * Generate Fibonacci sequence.
     *
     * @param int $n The number of terms in the Fibonacci sequence.
     *
     * @return array The Fibonacci sequence as an array.
     */
    public static function generateFibonacciSequence($n)
    {
        $fibonacci = [0, 1];

        for ($i = 2; $i < $n; $i++) {
            $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
        }

        return $fibonacci;
    }
}

// Example usage:

// Print "Hello, World!"
Practical::printHello();

// Add two numbers
$sum = Practical::add(5, 10);
echo "Sum: $sum\n";

// Generate Fibonacci sequence with 10 terms
$fibonacciSequence = Practical::generateFibonacciSequence(10);
echo "Fibonacci Sequence: " . implode(", ", $fibonacciSequence) . "\n";

?>

