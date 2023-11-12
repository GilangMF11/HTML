<?php
// Fungsi menghitung luas dan keliling persegi panjang
function luasPersegiPanjang($panjang, $lebar) {
    $luas = $panjang * $lebar;
    $keliling = 2 * ($panjang + $lebar);
    return array('luas' => $luas, 'keliling' => $keliling);
}

// Fungsi menghitung luas dan keliling segitiga
function luasSegitiga($alas, $tinggi) {
    $luas = 0.5 * $alas * $tinggi;
    // Untuk keliling segitiga, kita perlu mengetahui panjang sisi-sisinya
    // Namun, untuk contoh ini, kita asumsikan panjang sisi-sisi segitiga sama
    $sisi = sqrt(pow($alas / 2, 2) + pow($tinggi, 2));
    $keliling = 3 * $sisi;
    return array('luas' => $luas, 'keliling' => $keliling);
}

// Fungsi menghitung luas dan keliling lingkaran
function luasLingkaran($jariJari) {
    $luas = M_PI * pow($jariJari, 2);
    $keliling = 2 * M_PI * $jariJari;
    return array('luas' => $luas, 'keliling' => $keliling);
}

// Menampilkan menu
echo "Pilih program untuk menghitung luas dan keliling:\n";
echo "1. Persegi Panjang\n";
echo "2. Segitiga\n";
echo "3. Lingkaran\n";

// Meminta input dari pengguna
echo "Masukkan angka (1/2/3): ";
$pilihan = trim(fgets(STDIN));

// Memilih program luas atau keliling
echo "Pilih program:\n";
echo "a. Luas\n";
echo "b. Keliling\n";

// Meminta input dari pengguna
echo "Masukkan huruf (a/b): ";
$subPilihan = strtolower(trim(fgets(STDIN)));

// Menggunakan if-else untuk memilih program luas atau keliling
if ($subPilihan == 'a') {
    $jenisProgram = 'luas';
} elseif ($subPilihan == 'b') {
    $jenisProgram = 'keliling';
} else {
    echo "Pilihan tidak valid.\n";
    exit;
}

// Switch-case untuk memilih program luas atau keliling
switch ($pilihan) {
    case 1:
        // Input panjang dan lebar
        echo "Masukkan panjang: ";
        $panjang = trim(fgets(STDIN));
        echo "Masukkan lebar: ";
        $lebar = trim(fgets(STDIN));

        // Memanggil fungsi dan menampilkan hasil
        $hasil = luasPersegiPanjang($panjang, $lebar);
        echo "$jenisProgram Persegi Panjang: " . $hasil[$jenisProgram] . "\n";
        break;

    case 2:
        // Input alas dan tinggi
        echo "Masukkan alas: ";
        $alas = trim(fgets(STDIN));
        echo "Masukkan tinggi: ";
        $tinggi = trim(fgets(STDIN));

        // Memanggil fungsi dan menampilkan hasil
        $hasil = luasSegitiga($alas, $tinggi);
        echo "$jenisProgram Segitiga: " . $hasil[$jenisProgram] . "\n";
        break;

    case 3:
        // Input jari-jari
        echo "Masukkan jari-jari: ";
        $jariJari = trim(fgets(STDIN));

        // Memanggil fungsi dan menampilkan hasil
        $hasil = luasLingkaran($jariJari);
        echo "$jenisProgram Lingkaran: " . $hasil[$jenisProgram] . "\n";
        break;

    default:
        echo "Pilihan tidak valid.\n";
        break;
}
?>
