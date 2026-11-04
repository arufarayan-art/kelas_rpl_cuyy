<?php

declare(strict_types=1);

function bagi(float $a, float $b): float
{
    if ($b === 0.0) {
        throw new InvalidArgumentException('Pembagi tidak boleh nol.');
    }

    return $a / $b;
}

try {
    echo bagi(10.0, 0.0);
} catch (InvalidArgumentException $e) {
    echo 'Input perlu diperbaiki: ' . $e->getMessage();
} finally {
    echo PHP_EOL . 'Percobaan selesai.';
}
