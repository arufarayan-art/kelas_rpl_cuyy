<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Sekolah\Domain\Sapaan;

echo (new Sapaan())->teks('Rina');
