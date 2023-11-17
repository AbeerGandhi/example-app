<?php
function generateInvertedTriangle($rows) {
    for ($i = $rows; $i >= 1; $i--) {
        for ($j = 1; $j <= $rows - $i; $j++) {
            echo "  ";
        }
        for ($k = 1; $k <= 2 * $i - 1; $k++) {
            echo "* ";
        }
        echo PHP_EOL;
    }
}

$rows = 5; // You can change this to adjust the size of the inverted triangle
generateInvertedTriangle($rows);
?>

