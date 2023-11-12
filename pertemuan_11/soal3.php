<?php
// Buatlah Program Nilai
// Dibawah 60 = Nilai Anda E
// Diabwah 70 = Nilai Anda D
// Diabwah 80 = Nilai Anda C
// Diabwah 90 = Nilai Anda B
// Diabwah 100 = Nilai Anda A

echo"Masukan Nilai Anda : ";
// Menggunakan nilai acak antara 0 dan 120 sebagai nilai mahasiswa
$nilai = trim(fgets(STDIN));

// Memastikan nilai tidak melebihi 100
if ($nilai > 100) {
    echo "Nilai tidak valid!";
} else {
    // Menilai berdasarkan rentang nilai
    if ($nilai < 60) {
        echo "Nilai Anda: E";
    } elseif ($nilai < 70) {
        echo "Nilai Anda: D";
    } elseif ($nilai < 80) {
        echo "Nilai Anda: C";
    } elseif ($nilai < 90) {
        echo "Nilai Anda: B";
    } else {
        echo "Nilai Anda: A";
    }
}
?>

