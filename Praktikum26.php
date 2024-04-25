<?php
// Fungsi untuk menghitung luas lingkaran
function hitungLuasLingkaran($jari_jari) {
    $luas = pi() * pow($jari_jari, 2); // Menggunakan pi() untuk mendapatkan nilai pi
    return $luas;
}

// Contoh penggunaan fungsi
$jari_jari = 7;
$luas_lingkaran = hitungLuasLingkaran($jari_jari);
echo "Luas lingkaran dengan jari-jari $jari_jari adalah: $luas_lingkaran";
?>  