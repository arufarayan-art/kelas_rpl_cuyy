<?php

declare(strict_types=1);

interface SumberNilai
{
    public function untukSiswa(int $idSiswa): array;
}

final class SumberNilaiArray implements SumberNilai
{
    private array $data;

    public function __construct(array $data)
    {
        $this->data = $data;
    }

    public function untukSiswa(int $idSiswa): array
    {
        return $this->data[$idSiswa] ?? [];
    }
}

final class RaporService
{
    private SumberNilai $sumber;

    public function __construct(SumberNilai $sumber)
    {
        $this->sumber = $sumber;
    }

    public function rataRata(int $idSiswa): ?float
    {
        $nilai = $this->sumber->untukSiswa($idSiswa);

        return $nilai === []
            ? null
            : array_sum($nilai) / count($nilai);
    }
}

$sumber = new SumberNilaiArray([
    1 => [80.0, 90.0],
    2 => []
]);

$layanan = new RaporService($sumber);

echo $layanan->rataRata(1) . PHP_EOL;

var_dump($layanan->rataRata(2));