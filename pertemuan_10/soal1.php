<?php


//Function untuk membuat luas segitiga

//DEKLARASI VARIABLE
$tinggi;
$alas;
$hasil;

//function segitiga
function luasSegitiga() {
    echo"Masukan Alas\n";
    $alas = fgets(STDIN);

    echo"Masukan Tinggi\n";
    $tinggi = fgets(STDIN);

    $hasil = 0.5 * $alas * $tinggi;
    echo"Luas Segitiga adalah " . $hasil;

}

//luasSegitiga();


function sapa($nama = "Tamu") {
    echo "Halo, $nama!";
}

//sapa(); // Output: Halo, Tamu!
sapa("John"); // Output: Halo, John!


?>