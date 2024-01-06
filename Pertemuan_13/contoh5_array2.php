<?php 

$buah = array("Apel", "Jeruk", "Mangga", "Anggur", "Melon");

// Menampilkan elemen paling depan
$elemenDepan = $buah[0];
echo "Nama Paling depan : $elemenDepan \n" ; // Output: Apel

// Menampilkan elemen yang berada di tengah
$indeksTengah = (count($buah) - 1) / 2;
$elemenTengah = $buah[$indeksTengah];
echo "Elemen Tengah : " . $elemenTengah . "\n"; // Output: Jeruk

// Menampilkan elemen paling belakang
$elemenBelakang = $buah[count($buah) - 1];
echo "Elemen Paling Belakang : " . $elemenBelakang . "\n"; // Output: Anggur
?>