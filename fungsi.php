<?php
declare(strict_types=1);
function predikat(float $nilai, float $batasLulus = 75.0): string
{
if (!is_finite($nilai) || $nilai < 0 || $nilai > 100) {
throw new InvalidArgumentException('Nilai harus berada pada 0 sampai 100.');
}
if ($batasLulus < 0 || $batasLulus > 100) {
throw new InvalidArgumentException('Batas kelulusan tidak valid.');
}
$predikat = '';

if ($nilai >= $batasLulus) {
    $predikat = 'Lulus';
} else {
    $predikat = 'Belum lulus';
}
return $predikat;
}
echo predikat(80.0) . PHP_EOL;
echo predikat(70.0, 65.0) . PHP_EOL;

function emailOpsional(mixed $input): ?string //string atau kosong null
{
if (!is_string($input)) {
// throw new InvalidArgumentException('Email harus berupa teks.');
return null;
}
$email = trim($input);
if ($email === '') {
return null;
}
if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
// throw new InvalidArgumentException('Format email tidak valid.');
return null;
}
return $email;
}

// Contoh penggunaan fungsi emailOpsional
$email1 = emailOpsional('john.doe@example.com');
$email2 = emailOpsional('invalid-email');
$email3 = emailOpsional('');
// Output hasil
echo $email1 !== null ? "Email valid: $email1" . PHP_EOL :
    "Email tidak valid atau kosong." . PHP_EOL;
echo $email2 !== null ? "Email valid: $email2" . PHP_EOL :
    "Email tidak valid atau kosong." . PHP_EOL; 
    // Output: Email tidak valid atau kosong.
echo $email3 !== null ? "Email valid: $email3" . PHP_EOL :
    "Email tidak valid atau kosong." . PHP_EOL; 
    // Output: Email tidak valid atau kosong.
    // Contoh penggunaan fungsi predikat
$nilai1 = 85.0; 
$nilai2 = 70.0;
echo "Nilai: $nilai1, Predikat: " . predikat($nilai1
) . PHP_EOL; // Output: Nilai: 85, Predikat: Lulus
echo "Nilai: $nilai2, Predikat: " . predikat($nilai2) . PHP_EOL; // Output: Nilai: 70, Predikat: Belum lulus
