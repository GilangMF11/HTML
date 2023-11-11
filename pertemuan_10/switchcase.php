<?php

echo"Masukan Pilihan Anda Menggunakan Angka\n";
echo"==============================\n";
echo"1. Luas Persegi Panjang\n";
echo"2. Luas Segitiga\n";
echo"3. Luas Lingkaran\n";
//$pilihan = trim(fgets(STDIN));
$color = trim(fgets(STDIN));

switch ($color) {
  case "merah":
    echo "Warna yang dipilih Merah!";
    break;
  case "biru":
    echo "Warna yang dipilih Biru!";
    break;
  case "hijau":
    echo "Warna yang dipilih Hijau!";
    break;
  default:
    echo "Warna yang dipilih mungkin Merah, Biru, ataupun Hijau!";
}