<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form dan Output Komentar (Satu File)</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #e9ecef;
            /* Latar belakang abu-abu muda */
        }

        .card-custom {
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            /* Bayangan yang lebih menonjol */
            border-radius: 10px;
        }

        .komentar-box {
            border-left: 5px solid #198754;
            /* Garis samping hijau (Success) */
            padding: 15px;
            background-color: #f6fff9;
            /* Latar belakang sangat muda */
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-7">

                <h2 class="text-center mb-4 text-primary">Aplikasi Komentar Sederhana</h2>

                <?php
                // Cek apakah data dikirim melalui metode POST
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    // Ambil data dan sanitasi untuk keamanan
                    $nama = htmlspecialchars($_POST['nama'] ?? 'Anonim');
                    $komentar = htmlspecialchars($_POST['komentar'] ?? 'Tidak ada komentar.');
                    $waktu = date("d F Y, H:i:s");

                    // Tampilkan Hasil Komentar
                    echo '<div class="card card-custom mb-4 border-success">';
                    echo '  <div class="card-header bg-success text-white"><h5>✅ Komentar Berhasil Dikirim!</h5></div>';
                    echo '  <div class="card-body">';
                    echo '      <div class="komentar-box">';
                    echo '          <p class="mb-1"><strong>Nama:</strong> ' . $nama . '</p>';
                    echo '          <p class="text-muted small mb-2">Diposting pada: ' . $waktu . ' WIB</p>';
                    echo '          <hr>';
                    echo '          <h6>Isi Komentar:</h6>';
                    // nl2br digunakan agar baris baru yang diinput di textarea tetap terlihat
                    echo '          <p style="white-space: pre-wrap;">' . nl2br($komentar) . '</p>';
                    echo '      </div>';
                    echo '  </div>';
                    echo '</div>';
                }
                ?>

                <div class="card card-custom border-primary">
                    <div class="card-header bg-primary text-white">
                        <h5 class="mb-0">Tulis Komentar Anda</h5>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

                            <div class="mb-3">
                                <label for="nama" class="form-label">Nama Anda:</label>
                                <input type="text" class="form-control" id="nama" name="nama" required placeholder="Contoh: Budi Santoso">
                            </div>

                            <div class="mb-3">
                                <label for="komentar" class="form-label">Komentar:</label>
                                <textarea class="form-control" id="komentar" name="komentar" rows="5" required placeholder="Tulis komentar yang membangun di sini..."></textarea>
                            </div>

                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary btn-lg">Kirim dan Lihat Hasil</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>