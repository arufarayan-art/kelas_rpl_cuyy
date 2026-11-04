<?php

declare(strict_types=1);

function rataUji(array $nilai): ?float
{
    return $nilai === [] ? null : array_sum($nilai) / count($nilai);
}

function pastikan(bool $kondisi, string $pesan): void
{
    if (!$kondisi) {
        throw new RuntimeException($pesan);
    }
}

pastikan(rataUji([]) === null, 'Data kosong harus null.');
pastikan(abs(rataUji([80, 90]) - 85.0) < 0.00001, 'Rata-rata harus 85.');
pastikan(rataUji([0]) === 0.0, 'Nilai nol tidak boleh dianggap kosong.');

echo '3 pengujian lulus.' . PHP_EOL;
