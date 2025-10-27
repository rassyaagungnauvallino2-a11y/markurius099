<!DOCTYPE html>
<html>

<head>
    <title>Latihan Operator PHP</title>
</head>

<body>
    <?php
    // Panjang sisi kubus
    $sisi = 15;

    // Hitung volume kubus: sisi x sisi x sisi
    $volume = $sisi * $sisi * $sisi;

    // Variabel teks
    $teks1 = "Belajar Menghitung";
    $teks2 = "Volume Kubus";

    // Gabungkan teks menggunakan operator string (.)
    $hasilTeks = $teks1 . " " . $teks2;

    // Tampilkan hasil
    echo "<h2>$hasilTeks</h2>";
    echo "Panjang sisi kubus = " . $sisi . " cm<br>";
    echo "Rumus volume = sisi x sisi x sisi<br>";
    echo "Volume kubus = " . $sisi . " x " . $sisi . " x " . $sisi . " = " . $volume . " cm³";
    ?>
</body>

</html>