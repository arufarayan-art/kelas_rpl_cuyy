<?php

function nomorUrut(int $jumlah): Generator
{
    for ($i = 1; $i <= $jumlah; $i++) {
        yield $i;
    }
}

foreach (nomorUrut(3) as $nomor) {
    echo $nomor . PHP_EOL;
}
