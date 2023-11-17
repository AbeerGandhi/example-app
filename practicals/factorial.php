<?php
function calculateFactorial($n) {
    if ($n == 0 || $n == 1) {
        return 1;
    } else {
        return $n * calculateFactorial($n - 1);
    }
}

$number = 5; // You can change this to calculate the factorial of a different number
$result = calculateFactorial($number);

echo "Factorial of $number is: $result";
?>

