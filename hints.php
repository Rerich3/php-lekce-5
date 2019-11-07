
<?php
function multiply(int $multiplier1, int $multiplier2) {
    $product = $multiplier1 * $multiplier2;
    return $product;
}

function echoLine (string $line) {
    echo $line . '<br>';
}

function arrayAverage(array $numbers) {
    return array_sum($numbers) / count($numbers);
}

function formatDate(Datetime $date) {
    return $date->format('Y-m-d H:i:s');
}