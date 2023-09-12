<?php
$file_path = 'cr.txt'; // Ubah sesuai dengan lokasi dan nama file Anda
$lines = file($file_path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);

if ($lines === false) {
    die("Gagal membaca file.");
}

$start_line = 10050; // Baris awal
$end_line = 10000000000; // Baris akhir

for ($i = $start_line - 1; $i < $end_line; $i++) {
    $random_line = $lines[array_rand($lines)]; // Pilih baris acak dari array
    echo $random_line . "\n";
    flush(); // Memastikan output segera ditampilkan
    sleep(2); // Jeda 1 detik
}
?>
