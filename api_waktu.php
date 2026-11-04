<?php

header('Content-Type: application/json; charset=utf-8');
header('Cache-Control: no-store');

echo json_encode(['waktu' => date(DATE_ATOM)], JSON_THROW_ON_ERROR);
