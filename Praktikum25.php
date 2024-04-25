<?php
// Data mahasiswa dalam array asosiatif
$mahasiswa = array(
    array("nama" => "John Doe", "NIM" => "123456789", "jurusan" => "Teknik Informatika"),
    array("nama" => "Jane Smith", "NIM" => "987654321", "jurusan" => "Manajemen"),
    array("nama" => "David Brown", "NIM" => "456789123", "jurusan" => "Akuntansi")
);

// Menampilkan data mahasiswa
echo "<h2>Data Mahasiswa</h2>";
foreach ($mahasiswa as $data) {
    echo "Nama: " . $data["nama"] . "<br>";
    echo "NIM: " . $data["NIM"] . "<br>";
    echo "Jurusan: " . $data["jurusan"] . "<br><br>";
}
?>