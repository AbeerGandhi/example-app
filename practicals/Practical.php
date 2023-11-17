<?php
/**
 * Class representing a Practical utility with static functions.
 */
class Practical {
    /**
     * Calculates the sum of an array of numbers.
     *
     * @param array $numbers An array of numbers.
     *
     * @return int The sum of the numbers.
     */
    public static function calculateSum(array $numbers) {
        return array_sum($numbers);
    }

    /**
     * Checks if a given number is even.
     *
     * @param int $number The number to check.
     *
     * @return bool True if the number is even, false otherwise.
     */
    public static function isEven($number) {
        return $number % 2 === 0;
    }

    /**
     * Converts a string to uppercase.
     *
     * @param string $inputString The input string.
     *
     * @return string The uppercase version of the input string.
     */
    public static function convertToUpperCase($inputString) {
        return strtoupper($inputString);
    }
}

// Example usage:
$numbers = [1, 2, 3, 4, 5];
echo "Sum: " . Practical::calculateSum($numbers) . PHP_EOL;

$evenNumber = 6;
echo "Is $evenNumber even? " . (Practical::isEven($evenNumber) ? "Yes" : "No") . PHP_EOL;

$stringToConvert = "hello";
echo "Uppercase: " . Practical::convertToUpperCase($stringToConvert) . PHP_EOL;
?>

