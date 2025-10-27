<?php
// ==========================================================
// Bagian PHP Logic
// ==========================================================
$nama_petugas = "Rassya Agung";
$nama_perpustakaan = "Universitas BSI";
$status_petugas = "Online";

// Daftar Menu dengan Ikon Font Awesome yang sesuai (menggunakan fa-solid/fas)
$menu = [
    ['icon' => 'fas fa-tachometer-alt', 'text' => 'Dashboard', 'class' => 'active', 'link' => '#'], // Aktif
    ['icon' => 'fas fa-plane', 'text' => 'Track Pengunjung', 'link' => 'track_pengunjung.php'], // Pesawat
    ['icon' => 'fas fa-cog', 'text' => 'Data Pengunjung', 'link' => 'data_pengunjung.php'], // Roda Gigi
    ['icon' => 'fas fa-cog', 'text' => 'Data Pengguna', 'link' => 'data_pengguna.php'], // Roda Gigi
    ['icon' => 'fas fa-bars', 'text' => 'Data', 'link' => '#', 'has_submenu' => true], // Garis Tiga
    ['icon' => 'fas fa-exchange-alt', 'text' => 'Transaksi', 'link' => '#', 'has_submenu' => true], // Panah Bolak-balik
    ['icon' => 'fas fa-dollar-sign', 'text' => 'Denda', 'link' => 'denda.php'], // Dollar
    ['icon' => 'fas fa-cog', 'text' => 'Atur Perpustakaan', 'link' => 'atur_perpustakaan.php'], // Roda Gigi
];

?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard <?php echo $nama_perpustakaan; ?> - <?php echo $nama_petugas; ?></title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <style>
        /* ========================================================== */
        /* GAYA UMUM DAN TATA LETAK */
        /* ========================================================== */
        body {
            font-family: sans-serif;
            margin: 0;
            background-color: #f4f4f4;
            display: flex;
        }

        /* GAYA HEADER */
        .header {
            background-color: #3498db;
            color: white;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: fixed;
            width: calc(100% - 230px);
            z-index: 1000;
            margin-left: 230px;
        }

        .perpustakaan-title {
            font-size: 1.5em;
            font-weight: 600;
        }

        .sign-out {
            background-color: #e74c3c;
            color: white;
            border: none;
            padding: 8px 15px;
            border-radius: 3px;
            cursor: pointer;
        }

        /* GAYA SIDEBAR (NAVIGASI) */
        .sidebar {
            width: 230px;
            background-color: white;
            height: 100vh;
            position: fixed;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.05);
            padding-top: 10px;
        }

        .user-profile {
            padding: 15px;
            border-bottom: 1px solid #ddd;
            color: #333;
            margin-bottom: 10px;
        }

        .user-profile .name {
            font-weight: bold;
            font-size: 1.1em;
        }

        .user-profile .role,
        .user-profile .status {
            font-size: 0.9em;
            color: #555;
            margin-top: 3px;
        }

        .user-profile .status {
            color: #2ecc71;
            font-weight: bold;
        }

        /* GAYA MENU NAVIGASI */
        .main-navigation {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .nav-item {
            border-bottom: 1px solid #f4f4f4;
        }

        .nav-link {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 12px 15px;
            color: #333;
            text-decoration: none;
            font-size: 15px;
            transition: background-color 0.3s;
        }

        .nav-link:hover {
            background-color: #f0f0f0;
        }

        /* Style untuk menu aktif */
        .nav-item.active {
            border-left: 5px solid #3498db;
        }

        .nav-item.active .nav-link {
            background-color: #ecf0f1;
            font-weight: bold;
        }

        .nav-text-container {
            display: flex;
            align-items: center;
        }

        /* GAYA IKON FONT AWESOME */
        .nav-link .icon {
            margin-right: 10px;
            font-size: 18px;
            width: 20px;
            text-align: center;
        }

        /* Style untuk panah submenu */
        .arrow {
            font-weight: bold;
            color: #777;
            font-size: 1.2em;
            /* Kita gunakan karakter '<' dan CSS untuk membuatnya menyerupai panah */
            transform: rotate(0deg);
            /* Catatan: Di gambar, panah ke kanan, jadi tidak perlu rotasi, atau pakai icon fa-chevron-right */
        }

        /* ========================================================== */
        /* GAYA KONTEN UTAMA (DASHBOARD) */
        /* (Sama seperti sebelumnya) */
        /* ========================================================== */
        .main-content {
            margin-left: 230px;
            padding: 20px;
            padding-top: 80px;
            width: 100%;
        }

        .card-container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .card {
            flex: 1 1 calc(33.333% - 40px);
            min-width: 250px;
            color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .card h3 {
            font-size: 2.5em;
            margin: 0 0 5px 0;
        }

        .card p {
            margin: 0 0 10px 0;
            font-size: 1.1em;
        }

        .card small {
            opacity: 0.8;
            cursor: pointer;
        }

        .card.anggota {
            background-color: #1abc9c;
        }

        .card.buku {
            background-color: #3498db;
        }

        .card.kategori {
            background-color: #f39c12;
        }

        .card.pinjam {
            background-color: #2ecc71;
        }

        .card.kembali {
            background-color: #9b59b6;
        }

        .card.denda {
            background-color: #e74c3c;
        }

        .chart-box {
            background-color: white;
            padding: 20px;
            margin-top: 30px;
            border-radius: 5px;
        }

        .bar-chart {
            display: flex;
            align-items: flex-end;
            height: 300px;
            border-left: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
            position: relative;
        }

        .bar {
            width: 8%;
            margin: 0 1%;
            background-color: #2ecc71;
            position: relative;
            transition: height 0.5s;
        }
    </style>
</head>

<body>

    <div class="header">
        <div style="display: flex; align-items: center;">
            <span style="font-size: 1.5em; margin-right: 15px;"><i class="fas fa-bars"></i></span>
            <div class="perpustakaan-title"><?php echo $nama_perpustakaan; ?></div>
        </div>
        <div style="display: flex; align-items: center;">
            <span style="margin-right: 15px;"><?php echo $nama_petugas; ?> | Petugas</span>
            <button class="sign-out">Sign Out</button>
        </div>
    </div>

    <div class="sidebar">
        <div class="user-profile">
            <div class="name"><?php echo $nama_petugas; ?></div>
            <div class="role">Petugas</div>
            <div class="status"><?php echo $status_petugas; ?></div>
        </div>

        <ul class="main-navigation">
            <?php foreach ($menu as $item) : ?>
                <li class="nav-item <?php echo isset($item['class']) ? $item['class'] : ''; ?>">
                    <a href="<?php echo $item['link']; ?>" class="nav-link">
                        <div class="nav-text-container">
                            <span class="icon"><i class="<?php echo $item['icon']; ?>"></i></span>
                            <?php echo $item['text']; ?>
                        </div>
                        <?php if (isset($item['has_submenu'])) : ?>
                            <span class="arrow">&lt;</span>
                        <?php endif; ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>

    <div class="main-content">
        <div class="dashboard-header">
            <h2>Dashboard <small style="color: #777;">Control panel</small></h2>
        </div>

        <div class="card-container">
            <div class="card anggota">
                <h3>43</h3>
                <p>Anggota</p><small>More info &rarr;</small>
            </div>
            <div class="card buku">
                <h3>10</h3>
                <p>Jenis Buku</p><small>More info &rarr;</small>
            </div>
            <div class="card kategori">
                <h3>7</h3>
                <p>Kategori</p><small>More info &rarr;</small>
            </div>
            <div class="card pinjam" style="background-color: #2ecc71;">
                <h3>2</h3>
                <p>Dipinjamkan</p><small>More info &rarr;</small>
            </div>
            <div class="card kembali">
                <h3>10</h3>
                <p>Dikembalikan (Bulan Ini)</p><small>More info &rarr;</small>
            </div>
            <div class="card denda">
                <h3>1</h3>
                <p>Denda</p><small>More info &rarr;</small>
            </div>
        </div>

        <div class="chart-box">
            <h3>Grafik Perpustakaan (Pengunjung) Tahun 2022</h3>
            <div style="display: flex; gap: 10px; margin-bottom: 20px;">
                <select style="padding: 8px; border-radius: 3px;">
                    <option>2022</option>
                </select>
                <button style="padding: 8px; border-radius: 3px;">Q</button>
                <button style="padding: 8px; border-radius: 3px; background-color: #3498db; color: white; border: none;">Refresh</button>
            </div>

            <div style="position: relative; height: 350px;">
                <div style="position: absolute; left: -30px; top: 0; height: 300px; display: flex; flex-direction: column-reverse; justify-content: space-between; font-size: 0.8em;">
                    <span>8</span><span>7</span><span>6</span><span>5</span><span>4</span><span>3</span><span>2</span><span>1</span><span>0</span>
                </div>

                <div class="bar-chart" style="height: 300px; margin-left: 20px;">
                    <?php
                    $data_pengunjung = [0, 0, 6, 6, 0, 1, 3, 5, 2, 8, 7, 1];
                    $max_y = 8;
                    foreach ($data_pengunjung as $pengunjung) {
                        $tinggi_persen = ($pengunjung / $max_y) * 100;
                        echo '<div class="bar" style="height: ' . $tinggi_persen . '%;" title="' . $pengunjung . '"></div>';
                    }
                    ?>
                </div>

                <div style="width: calc(100% - 20px); margin-left: 20px; display: flex; justify-content: space-around; font-size: 0.8em; position: absolute; bottom: 0;">
                    <span>Januari</span><span>Februari</span><span>Maret</span><span>April</span><span>Mei</span><span>Juni</span><span>Juli</span><span>Agustus</span><span>Septem.</span><span>Oktober</span><span>Novem.</span><span>Desem.</span>
                </div>
            </div>
        </div>
    </div>

</body>

</html>