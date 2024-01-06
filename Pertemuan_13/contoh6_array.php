<?php
// Inisialisasi array
$barang = array(
    "nama" => "Laptop",
    "harga" => 8000000,
    "merk" => "Asus",
    "diskon" => 10
);

foreach ($barang as $key => $value) {
    echo ucfirst($key) . ": $value\n";
}
?>
