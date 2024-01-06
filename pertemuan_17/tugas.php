<?php

// Definisikan interface
interface Hewan {
    public function bersuara();
    public function bergerak();
    public function jenis();
}

// Implementasikan interface pada class Burung
class Burung implements Hewan {
    public function bersuara() {
        echo "Tweet-tweet\n";
    }

    public function bergerak() {
        echo "Terbang\n";
    }

    public function jenis() {
        echo "Burung\n";
    }
}

// Buat objek Burung
$burung = new Burung();

// Panggil metode-metode dari interface
$burung->bersuara();
$burung->bergerak();
$burung->jenis();
?>
