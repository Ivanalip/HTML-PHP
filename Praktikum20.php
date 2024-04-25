<?php
// Deklarasi variabel nomor hari
$nomor_hari = 3; // Misalnya 3 adalah hari Rabu

// Array untuk nama hari dalam bahasa Inggris
$nama_hari = array(1 => "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday", "Sunday");

// Menampilkan nama hari dalam bahasa Inggris berdasarkan nomor hari
if ($nomor_hari >= 1 && $nomor_hari <= 7) {
    echo "Hari ke-$nomor_hari dalam bahasa Inggris adalah: " . $nama_hari[$nomor_hari];
} else {
    echo "Nomor hari tidak valid.";
}
?> 