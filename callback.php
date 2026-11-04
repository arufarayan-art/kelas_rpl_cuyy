<?php

declare(strict_types=1);

$nilai = [60, 75, 90];
$batas = 75;

$lulus = array_filter($nilai, fn (int $n): bool => $n >= $batas);
$bonus = array_map(fn (int $n): int => min(100, $n + 5), $nilai);
$total = array_reduce($nilai, fn (int $jumlah, int $n): int => $jumlah + $n, 0);

$format = function (int $n) use ($batas): string {
    return $n . ($n >= $batas ? ' (lulus)' : ' (belum lulus)');
};

print_r(array_values($lulus));
print_r($bonus);
echo $total . PHP_EOL;
echo $format(90) . PHP_EOL;
