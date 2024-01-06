<?php
// Array asosiatif multidimensi
$barang = array(
    "Laptop" => array(
        "harga" => 8000000,
        "merk" => "Asus",
        "diskon" => 10
    ),
    "Smartphone" => array(
        "harga" => 4000000,
        "merk" => "Samsung",
        "diskon" => 5
    ),
    "Kamera" => array(
        "harga" => 12000000,
        "merk" => "Canon",
        "diskon" => 8
    )
);

// Mengakses elemen array
echo $barang["Laptop"]["merk"] . PHP_EOL;// Output: Asus
echo $barang["Laptop"]["harga"] . PHP_EOL;
//echo $barang["Kamera"]["harga"]; // Output: 12000000
?>
