<?php

declare(strict_types=1);

function rataRata(float ...$angka): ?float
{
    if ($angka === []) {
        return null;
    }

    return array_sum($angka) / count($angka);
}

$data = [80.0, 90.0, 100.0];

echo rataRata(...$data) . PHP_EOL;

var_dump(rataRata());