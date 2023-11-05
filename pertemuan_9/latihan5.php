<?php
//Challange
/***
 * Buatlah Program 5 Mata Kuliah dengan syarat
 * input Nama Matakuliah
 * Input Nilai Mata kuliah 
 * Tampilkan untuk setiap nama dan nilai mata kuliah setelah selesai
 */

 // Buat Variable Mata Kuliah
 $matakuliah1;
 $matakuliah2;
 $matakuliah3;
 $matakuliah4;
 $matakuliah5;

 // Buat Varibale Nilai

 $nilai1; 
 $nilai2;
 $nilai3;
 $nilai4;
 $nilai5;

 //Tampilkan Data
 echo"PROGRAM NILAI MATA KULIAH\n";
 echo"==========================\n";

 //Mata Kuliah 1
 echo"Nama Matakuliah 1\n";
 $matakuliah1 = fgets(STDIN);
 echo"Nilai Mata Kuliah 1 :", $matakuliah1;
 $nilai1 = fgets(STDIN);

 //Mata Kuliah 2
 echo"Nama Matakuliah 2\n";
 $matakuliah2 = fgets(STDIN);
 echo"Nilai Mata Kuliah 2 :", $matakuliah2;
 $nilai2 = fgets(STDIN);

 //Mata Kuliah 3
 echo"Nama Matakuliah 3\n";
 $matakuliah3 = fgets(STDIN);
 echo"Nilai Mata Kuliah 3 :", $matakuliah3;
 $nilai3 = fgets(STDIN);

 //Mata Kuliah 4
 echo"Nama Matakuliah 4\n";
 $matakuliah4 = fgets(STDIN);
 echo"Nilai Mata Kuliah 4 :", $matakuliah4;
 $nilai4 = fgets(STDIN);

 //Mata Kuliah 5
 echo"Nama Matakuliah 5\n";
 $matakuliah5 = fgets(STDIN);
 echo"Nilai Mata Kuliah 5 :", $matakuliah5;
 $nilai5 = fgets(STDIN);

 //Tampilkan data
 echo"Mata Kuliah " , $matakuliah1, "Bernilai " ,$nilai1;
 echo"Mata Kuliah " , $matakuliah2, "Bernilai " ,$nilai2;
 echo"Mata Kuliah " , $matakuliah3, "Bernilai " ,$nilai3;
 echo"Mata Kuliah " , $matakuliah4, "Bernilai " ,$nilai4;
 echo"Mata Kuliah " , $matakuliah5, "Bernilai " ,$nilai5;

 //rata - rata 
 //operator +, -, *, /
 $rataRata = ($nilai1+$nilai2+$nilai3+$nilai4+$nilai5) / 5;
 echo"Rata Nilai UAS adalah ", $rataRata;

 define("jariJari", 3.14);
 echo jariJari;
?>