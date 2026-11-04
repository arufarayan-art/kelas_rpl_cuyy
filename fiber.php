<?php

$fiber = new Fiber(function (): void {
    echo 'A' . PHP_EOL;

    $pesan = Fiber::suspend('berhenti sementara');

    echo $pesan . PHP_EOL;
});

echo $fiber->start() . PHP_EOL;

echo 'B' . PHP_EOL;

$fiber->resume('C');
