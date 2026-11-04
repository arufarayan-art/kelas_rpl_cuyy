<?php

declare(strict_types=1);

namespace Sekolah\Domain;

final class Sapaan
{
    public function teks(string $nama): string
    {
        return 'Halo, ' . $nama;
    }
}
