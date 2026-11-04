<?php

declare(strict_types=1);

final class NilaiAkademik
{
    private float $angka;

    public function __construct(float $angka)
    {
        if (!is_finite($angka) || $angka < 0 || $angka > 100) {
            throw new InvalidArgumentException('Nilai di luar rentang.');
        }

        $this->angka = $angka;
    }

    public function angka(): float
    {
        return $this->angka;
    }

    public function lulus(float $kkm = 75.0): bool
    {
        return $this->angka >= $kkm;
    }
}

$nilai = new NilaiAkademik(82.5);

echo $nilai->angka() . PHP_EOL;
echo $nilai->lulus() ? 'Lulus' : 'Belum lulus';
