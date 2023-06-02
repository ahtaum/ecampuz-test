<?php

function bagiBilanganBulatPositif($x, $y) {
    if ($y == 0) {
        return "Error: Gk bisa dibagi 0";
    }

    $i = 0;
    $bagi = $x;

    while ($bagi >= $y) {
        $bagi -= $y;

        $i++;
    }

    return $i;
}

$result = bagiBilanganBulatPositif(8, 2);
echo "Hasil : " . $result; 