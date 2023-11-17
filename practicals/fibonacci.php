<?php
function generateFibonacci($n) {
    $fibonacci = array(0, 1);

    for ($i = 2; $i < $n; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return $fibonacci;
}

$n = 10; // You can change this to generate a different number of Fibonacci numbers
$result = generateFibonacci($n);

echo "Fibonacci Sequence (first $n numbers): ";
echo implode(', ', $result);
?>

