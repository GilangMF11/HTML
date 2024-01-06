<?php
$buah = array("Apel", "Jeruk", "Mangga", "Anggur");

// Index = 0

foreach ($buah as $index => $nama_buah) {
    if ($index === 0) {
        echo $nama_buah . "\n";
        break; // Hentikan perulangan setelah menemukan index 1
    }
}

?>
