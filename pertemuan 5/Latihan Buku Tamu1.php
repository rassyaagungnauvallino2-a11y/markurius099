<?php
// ====================================================================
// BAGIAN PHP: LOGIKA PEMROSESAN FORM
// ====================================================================

// Variabel untuk menyimpan nilai input (untuk ditampilkan kembali di form)
$nama_anda = "Bintang Galaxy";
$email_anda = "bintang@gmail.com";
$komentar_anda = "webnya bagus, bisa ditambahkan konten lain yang menarik";
$pesan_status = "";

// Cek jika form disubmit
if (isset($_POST['kirim'])) {
    // Ambil data dari form
    $nama_anda = $_POST['nama'];
    $email_anda = $_POST['email'];
    $komentar_anda = $_POST['komentar'];

    // Validasi sederhana (Anda bisa menambahkan validasi yang lebih ketat di sini)
    if (empty($nama_anda) || empty($email_anda) || empty($komentar_anda)) {
        $pesan_status = '<p style="color: red; font-weight: bold;">Mohon lengkapi semua kolom!</p>';
    } else {
        // Karena ini hanya simulasi tampilan, kita hanya tampilkan pesan sukses.
        // Untuk penyimpanan ke database, lihat contoh kode sebelumnya.
        $pesan_status = '<p style="color: green; font-weight: bold;">✅ Komentar Anda berhasil dikirim!</p>';

        // Hapus data dari variabel setelah sukses dikirim agar form bersih (opsional)
        // $nama_anda = $email_anda = $komentar_anda = ""; 
    }
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Form Komentar</title>
    <style>
        body {
            font-family: sans-serif;
            /* Font default browser */
            color: #000;
            margin: 20px;
        }

        h1 {
            font-size: 32px;
            font-weight: normal;
            /* Font BUKU TAMU di gambar terlihat agak tebal tapi tidak bold penuh */
            margin-bottom: 20px;
        }

        p {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 14px;
            line-height: 1.5;
        }

        hr {
            border: 0;
            border-top: 1px solid #ccc;
            margin: 10px 0;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 600px;
            margin-top: 10px;
        }

        td {
            padding: 5px 0;
            vertical-align: top;
            font-family: Tahoma, Verdana, sans-serif;
            font-size: 13px;
        }

        td:nth-child(1) {
            width: 120px;
            /* Lebar kolom label */
            padding-right: 10px;
        }

        td:nth-child(2) {
            width: 10px;
            /* Lebar kolom titik dua */
        }

        input[type="text"] {
            width: 300px;
            /* Ukuran kotak input */
            padding: 2px;
            border: 1px solid #7f9db9;
        }

        textarea {
            width: 300px;
            /* Ukuran kotak komentar */
            min-height: 100px;
            padding: 2px;
            border: 1px solid #7f9db9;
            resize: vertical;
        }

        input[type="submit"],
        input[type="reset"] {
            padding: 4px 10px;
            margin-right: 5px;
            /* Style tombol default browser */
        }
    </style>
</head>

<body>

    <div style="font-size: 10px; color: #666; margin-bottom: 20px;">
        <span style="font-weight: bold;">[Form Komentar]</span>
        <span style="float: right;">[Close/Min/Max buttons here]</span>
    </div>

    <h1>BUKU TAMU</h1>

    <p>Komentar dan Saran Anda Sangat Kami Butuhkan<br>Untuk Meningkatkan Kualitas Situs Kami</p>

    <hr>

    <?php echo $pesan_status; // Tampilkan pesan status 
    ?>

    <form action="" method="POST">
        <table>
            <tr>
                <td>Nama Anda</td>
                <td>:</td>
                <td>
                    <input type="text" name="nama" value="<?php echo htmlspecialchars($nama_anda); ?>" required>
                </td>
            </tr>
            <tr>
                <td>Email Anda</td>
                <td>:</td>
                <td>
                    <input type="text" name="email" value="<?php echo htmlspecialchars($email_anda); ?>" required>
                </td>
            </tr>
            <tr>
                <td>Komentar Anda</td>
                <td>:</td>
                <td>
                    <textarea name="komentar" rows="6" required><?php echo htmlspecialchars($komentar_anda); ?></textarea>
                </td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" name="kirim" value="Kirim">
                    <input type="reset" name="batal" value="Batal">
                </td>
            </tr>
        </table>
    </form>

</body>

</html>