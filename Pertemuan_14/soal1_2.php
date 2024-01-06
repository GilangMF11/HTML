<?php 

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

foreach ($barang as $nama => $detail) {
    echo "Nama Barang: " . $nama . "\n";
    echo "Harga: " . $detail['harga'] . "\n";
    echo "Merk: " . $detail['merk'] . "\n";
    echo "Diskon: " . $detail['diskon'] . "%\n";
    echo "\n";
}

?>