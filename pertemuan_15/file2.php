<?php
include 'file1.php';

// Membuat objek dari kelas Kendaraan
$mobil = new Kendaraan("Toyota", 4, 200000000, "Merah", 200);
$motor = new Kendaraan("Yamaha", 2, 100000000, "Hitam", 150);
// Menggunakan metode set untuk mengubah nilai properti
$mobil->setMerk("Honda");

// Menampilkan hasil menggunakan metode get
echo "Merk: " . $mobil->getMerk() . PHP_EOL;
echo "Jumlah Roda: " . $mobil->getRoda() . PHP_EOL;
echo "Harga: " . $mobil->getHarga() . PHP_EOL;
echo "Warna: " . $mobil->getWarna() . PHP_EOL;
echo "Torsi: " . $mobil->getTorsi() . PHP_EOL;

echo PHP_EOL;
//Menampilkan Motor
echo "Merk: " . $motor->getMerk() . PHP_EOL;
echo "Jumlah Roda: " . $motor->getRoda() . PHP_EOL;
echo "Harga: " . $motor->getHarga() . PHP_EOL;
echo "Warna: " . $motor->getWarna() . PHP_EOL;
echo "Torsi: " . $motor->getTorsi() . PHP_EOL;
?>
