<!DOCTYPE html>
<html>

<head>
    <title>Form Input dan Tampil Komentar (Terintegrasi)</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .container {
            width: 400px;
            margin: 50px auto;
            padding: 20px;
            background-color: white;
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ddd;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 10px 15px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .output-section {
            margin-top: 30px;
            padding-top: 20px;
            border-top: 2px solid #eee;
        }

        .komentar-box {
            border: 1px solid #cce5ff;
            padding: 15px;
            background-color: #e6f3ff;
            border-radius: 4px;
        }

        .nama {
            font-weight: bold;
            color: #0056b0;
            margin-bottom: 5px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2>Form Komentar</h2>

        <form method="POST" action="">

            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="komentar">Komentar:</label>
            <textarea id="komentar" name="komentar" rows="5" required></textarea>

            <input type="submit" name="submit_komentar" value="Kirim Komentar">
        </form>

        <div class="output-section">
            <h3>Output Komentar</h3>

            <?php
            // Cek apakah tombol submit dengan nama 'submit_komentar' telah ditekan
            if (isset($_POST['submit_komentar'])) {

                // Ambil data Nama dan Komentar dari formulir
                // htmlspecialchars digunakan untuk keamanan
                $nama = htmlspecialchars($_POST['nama'] ?? 'Anonim');
                $komentar = htmlspecialchars($_POST['komentar'] ?? 'Tidak ada komentar.');

                // Tampilkan hasil
                echo "<div class='komentar-box'>";
                echo "<div class='nama'>Nama: **" . $nama . "**</div>";
                echo "<p class='pesan'>" . nl2br($komentar) . "</p>"; // nl2br untuk baris baru
                echo "</div>";
            } else {
                // Pesan sebelum formulir di-submit
                echo "<p>Komentar akan ditampilkan di sini setelah Anda mengirim formulir.</p>";
            }
            ?>
        </div>
    </div>

</body>

</html>