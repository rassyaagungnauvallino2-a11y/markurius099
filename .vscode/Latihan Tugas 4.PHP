<?php
// Panjang sisi kubus
$sisi = 15; // dalam cm

// Menghitung volume kubus (rumus: sisi x sisi x sisi)
$volume = $sisi * $sisi * $sisi;

// Membuat variabel teks
$teks1 = "Belajar Menghitung";
$teks2 = "Volume Kubus";

// Menggabungkan kedua teks menggunakan operator string (.)
$hasil_teks = $teks1 . " " . $teks2;

// Menampilkan hasil
echo $hasil_teks . "<br>";
echo "Panjang sisi kubus = " . $sisi . " cm<br>";
echo "Volume kubus = " . $volume . " cm³";
