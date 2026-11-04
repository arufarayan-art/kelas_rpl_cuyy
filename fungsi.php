<?php

declare(strict_types=1);

function predikat(float $nilai, float $batasLulus = 75.0): string
{
    if (!is_finite($nilai) || $nilai < 0 || $nilai > 100) {
        throw new InvalidArgumentException('Nilai harus berada pada 0 sampai 100.');
    }
    if ($batasLulus < 0 || $batasLulus > 100) {
        throw new InvalidArgumentException('Batas kelulusan tidak valid.');
    }
    return $nilai >= $batasLulus ? 'Lulus' : 'Belum lulus';
}

echo predikat(80.0) . PHP_EOL;
echo predikat(70.0, 65.0) . PHP_EOL;
