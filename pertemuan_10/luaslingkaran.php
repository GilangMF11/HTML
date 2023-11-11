<?php 
echo"LUAS LINGKARAN\n";
echo"==============\n";
//Deklarasi Variable
//jari jari
$jariJari=0;
$hasil;
//PI = 22/7 atau 3.14 
//variable konstan 
define("PI", 3.14);

//Luas Lingkaran PI r2
echo"Masukan Jari Jari: ";
$jariJari = fgets(STDIN);

//rumus
$hasil = PI * ($jariJari**2);
echo"Hasil Luas Lingkaran adalah " . $hasil;
?>

