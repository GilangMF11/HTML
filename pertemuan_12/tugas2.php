<?php
// Fungsi untuk menentukan ganjil atau genap
function cekGanjilGenap($bilangan) {
    if ($bilangan % 2 == 0) {
        return "Genap";
    } else {
        return "Ganjil";
    }
}

// Meminta input dari pengguna
echo "Masukkan bilangan: ";
$bilangan = trim(fgets(STDIN));

// Memanggil fungsi untuk menentukan ganjil atau genap
$hasil = cekGanjilGenap($bilangan);

// Menampilkan hasil
echo "Bilangan $bilangan adalah bilangan $hasil." . PHP_EOL;
?>
