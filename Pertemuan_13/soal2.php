<?php

// Meminta pengguna untuk memasukkan jumlah iterasi
echo "Masukkan jumlah iterasi: ";
$jumlah_iterasi = trim(fgets(STDIN));

// Melakukan perulangan sebanyak jumlah iterasi yang dimasukkan pengguna
for ($i = 1; $i <= $jumlah_iterasi; $i++) {
    echo "Nomor ke-$i\n";
}

?>
