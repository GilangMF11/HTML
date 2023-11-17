<?php
// Fungsi untuk menghitung tunjangan anak
function hitungTunjanganAnak($jumlahAnak) {
    // Tunjangan per anak
    $tunjanganPerAnak = 500000;

    // Batas maksimal anak yang dihitung (maksimal 5 anak)
    $batasAnak = 5;

    // Jika jumlah anak lebih dari 5, hanya hitung tunjangan untuk 5 anak
    if ($jumlahAnak > $batasAnak) {
        $jumlahAnak = $batasAnak;
    }

    // Hitung tunjangan anak
    $tunjanganAnak = $jumlahAnak * $tunjanganPerAnak;

    return $tunjanganAnak;
}

// Meminta input dari pengguna
echo "Masukkan Nama: ";
$nama = trim(fgets(STDIN));

echo "Masukkan Gaji: ";
$gaji = trim(fgets(STDIN));

echo "Masukkan Jumlah Anak: ";
$jumlahAnak = trim(fgets(STDIN));

// Memanggil fungsi untuk menghitung tunjangan anak
$tunjanganAnak = hitungTunjanganAnak($jumlahAnak);

// Menampilkan hasil
echo PHP_EOL; // Memberi spasi
echo "Hasil Perhitungan" . PHP_EOL;
echo "Nama: $nama" . PHP_EOL;
echo "Gaji: $gaji" . PHP_EOL;
echo "Jumlah Anak: $jumlahAnak" . PHP_EOL;
echo "Gaji + Tunjangan Anak: $tunjanganAnak" . PHP_EOL;

// Menentukan apakah mendapat tunjangan lebih dari 5 anak
if ($jumlahAnak > 5) {
    echo "Catatan: Tunjangan hanya dihitung untuk 5 anak." . PHP_EOL;
}
