<?php

$mulai = microtime(true);

sleep(1);

echo 'Pekerjaan A selesai' . PHP_EOL;

sleep(1);

echo 'Pekerjaan B selesai' . PHP_EOL;

printf('Durasi: %.2f detik%s', microtime(true) - $mulai, PHP_EOL);
