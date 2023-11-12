<?php 
//buatlah program untuk menampilkan nilai mahasiswa
// jika nilai kurang dari 60 tampilkan dinyatakan tidak lulus
// jika nilai lebih dari 60 tampilkan dinyatakan lulus
echo"Masukan Nilai : ";
$nilai = trim(fgets(STDIN));

if ($nilai < 60) {
    echo "Anda Tidak Lulus";
} else {
    echo "Selamat Anda Lulus";
}
?>