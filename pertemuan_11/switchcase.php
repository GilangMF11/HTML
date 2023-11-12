<?php

// Fungsi untuk menghitung luas persegi panjang
function luasPersegiPanjang($panjang, $lebar) {
    return $panjang * $lebar;
}

// Fungsi untuk menghitung luas segitiga
function luasSegitiga($alas, $tinggi) {
    return 0.5 * $alas * $tinggi;
}

// Fungsi untuk menghitung luas lingkaran
function luasLingkaran($jariJari) {
    return M_PI * $jariJari * $jariJari;
}

// Menampilkan menu
echo "Pilih program untuk menghitung luas:\n";
echo "1. Luas Persegi Panjang\n";
echo "2. Luas Segitiga\n";
echo "3. Luas Lingkaran\n";

// Meminta input dari pengguna
echo "Masukkan angka (1/2/3): ";
$pilihan = trim(fgets(STDIN));

// Switch-case untuk memilih program
switch ($pilihan) {
    case 1:
        // Input panjang dan lebar
        echo "Masukkan panjang: ";
        $panjang = trim(fgets(STDIN));
        echo "Masukkan lebar: ";
        $lebar = trim(fgets(STDIN));

        // Memanggil fungsi dan menampilkan hasil
        echo "Luas Persegi Panjang: " . luasPersegiPanjang($panjang, $lebar) . "\n";
        break;

    case 2:
        // Input alas dan tinggi
        echo "Masukkan alas: ";
        $alas = trim(fgets(STDIN));
        echo "Masukkan tinggi: ";
        $tinggi = trim(fgets(STDIN));

        // Memanggil fungsi dan menampilkan hasil
        echo "Luas Segitiga: " . luasSegitiga($alas, $tinggi) . "\n";
        break;

    case 3:
        // Input jari-jari
        echo "Masukkan jari-jari: ";
        $jariJari = trim(fgets(STDIN));

        // Memanggil fungsi dan menampilkan hasil
        echo "Luas Lingkaran: " . luasLingkaran($jariJari) . "\n";
        break;

    default:
        echo "Pilihan tidak valid.\n";
        break;
}


?>
