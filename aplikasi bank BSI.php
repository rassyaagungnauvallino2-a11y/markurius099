<?php
// ==========================================================
// Bagian PHP Logic
// ==========================================================

// Variabel Identitas
$nama_petugas = "Rassya Agung";
$nama_institusi = "Bank BSI";
$status_petugas = "Online";

// Data Statistik Keuangan (dalam Miliar/Ribuan)
$data_statistik = [
    'nasabah' => 150, // dalam ribuan
    'pinjaman_aktif' => 25, // dalam miliar
    'deposito_berjalan' => 50, // dalam miliar
    'transaksi_hari_ini' => 12000, // dalam ribuan
    'kredit_macet' => 3, // dalam persen
    'pendapatan_bersih' => 45, // dalam miliar
];

// Data untuk Grafik Penghasilan Bulanan (dalam Miliar Rupiah)
$max_y = 10;
$data_penghasilan_bulanan = [
    1,
    3,
    6,
    7,
    9,
    8,
    5,
    7,
    8,
    10,
    9,
    7
];

// Daftar Menu dengan Ikon Font Awesome
$menu = [
    ['icon' => 'fas fa-chart-line', 'text' => 'Dashboard', 'class' => 'active', 'link' => '#'],
    ['icon' => 'fas fa-users', 'text' => 'Data Nasabah', 'link' => 'data_nasabah.php'],
    ['icon' => 'fas fa-hand-holding-usd', 'text' => 'Data Pinjaman', 'link' => 'data_pinjaman.php'],
    ['icon' => 'fas fa-building', 'text' => 'Data Cabang', 'link' => 'data_cabang.php'],
    ['icon' => 'fas fa-file-invoice-dollar', 'text' => 'Laporan Keuangan', 'link' => '#', 'has_submenu' => true],
    ['icon' => 'fas fa-exchange-alt', 'text' => 'Transaksi', 'link' => '#', 'has_submenu' => true],
    ['icon' => 'fas fa-chart-pie', 'text' => 'Analisis Risiko', 'link' => 'analisis_risiko.php'],
    ['icon' => 'fas fa-cog', 'text' => 'Pengaturan Sistem', 'link' => 'pengaturan_sistem.php'],
];

?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Keuangan <?php echo $nama_institusi; ?> - <?php echo $nama_petugas; ?></title>

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
            background-color: #008000;
            /* Warna Hijau BSI */
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

        /* GAYA SIDEBAR */
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

        .user-profile .role {
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

        .nav-item.active {
            border-left: 5px solid #008000;
        }

        /* Warna Hijau BSI */
        .nav-item.active .nav-link {
            background-color: #ecf0f1;
            font-weight: bold;
        }

        .nav-text-container {
            display: flex;
            align-items: center;
        }

        .nav-link .icon {
            margin-right: 10px;
            font-size: 18px;
            width: 20px;
            text-align: center;
        }

        .arrow {
            font-weight: bold;
            color: #777;
            font-size: 1.2em;
        }

        /* GAYA KONTEN UTAMA */
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

        /* Warna Card Keuangan */
        .card.nasabah {
            background-color: #2ecc71;
        }

        /* Hijau */
        .card.pinjaman {
            background-color: #3499db;
        }

        /* Biru */
        .card.deposito {
            background-color: #f39c12;
        }

        /* Oranye */
        .card.transaksi {
            background-color: #9b59b6;
        }

        /* Ungu */
        .card.macet {
            background-color: #e74c3c;
        }

        /* Merah */
        .card.pendapatan {
            background-color: #1abc9c;
        }

        /* Cyan */

        /* GAYA GRAFIK */
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
            background-color: #008000;
            position: relative;
            transition: height 0.5s;
        }
    </style>
</head>

<body>

    <div class="header">
        <div style="display: flex; align-items: center;">
            <span style="font-size: 1.5em; margin-right: 15px;"><i class="fas fa-bars"></i></span>
            <div class="perpustakaan-title"><?php echo $nama_institusi; ?></div>
        </div>
        <div style="display: flex; align-items: center;">
            <span style="margin-right: 15px;"><?php echo $nama_petugas; ?> | Staf Keuangan</span>
            <button class="sign-out">Sign Out</button>
        </div>
    </div>

    <div class="sidebar">
        <div class="user-profile">
            <div class="name"><?php echo $nama_petugas; ?></div>
            <div class="role">Staf Keuangan</div>
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
            <h2>Dashboard Keuangan <small style="color: #777;">Financial Control panel</small></h2>
        </div>

        <div class="card-container">
            <div class="card nasabah">
                <h3><?php echo number_format($data_statistik['nasabah']); ?>K</h3>
                <p>Nasabah Aktif</p><small>More info &rarr;</small>
            </div>
            <div class="card pinjaman">
                <h3><?php echo $data_statistik['pinjaman_aktif']; ?>M</h3>
                <p>Pinjaman Aktif</p><small>More info &rarr;</small>
            </div>
            <div class="card deposito">
                <h3><?php echo $data_statistik['deposito_berjalan']; ?>M</h3>
                <p>Deposito Berjalan</p><small>More info &rarr;</small>
            </div>
            <div class="card transaksi">
                <h3><?php echo number_format($data_statistik['transaksi_hari_ini']); ?></h3>
                <p>Transaksi Hari Ini (Ribu)</p><small>More info &rarr;</small>
            </div>
            <div class="card macet">
                <h3><?php echo $data_statistik['kredit_macet']; ?>%</h3>
                <p>Kredit Macet (NPL)</p><small>More info &rarr;</small>
            </div>
            <div class="card pendapatan">
                <h3><?php echo $data_statistik['pendapatan_bersih']; ?>M</h3>
                <p>Pendapatan Bersih (Bln Ini)</p><small>More info &rarr;</small>
            </div>
        </div>

        <div class="chart-box">
            <h3>Grafik Penghasilan Keuangan <?php echo $nama_institusi; ?> (Miliar Rupiah) - Tahun 2024</h3>
            <div style="display: flex; gap: 10px; margin-bottom: 20px;">
                <select style="padding: 8px; border-radius: 3px;">
                    <option>2024</option>
                </select>
                <button style="padding: 8px; border-radius: 3px;">Q</button>
                <button style="padding: 8px; border-radius: 3px; background-color: #008000; color: white; border: none;">Refresh</button>
            </div>

            <div style="position: relative; height: 350px;">
                <div style="position: absolute; left: -30px; top: 0; height: 300px; display: flex; flex-direction: column-reverse; justify-content: space-between; font-size: 0.8em;">
                    <?php for ($i = $max_y; $i >= 0; $i--) {
                        echo "<span>{$i}</span>";
                    } ?>
                </div>

                <div class="bar-chart" style="height: 300px; margin-left: 20px;">
                    <?php
                    $bulan = ["Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"];

                    foreach ($data_penghasilan_bulanan as $index => $penghasilan) {
                        $tinggi_persen = ($penghasilan / $max_y) * 100;
                        echo '<div class="bar" style="height: ' . $tinggi_persen . '%;" title="' . $bulan[$index] . ': ' . $penghasilan . 'M"></div>';
                    }
                    ?>
                </div>

                <div style="width: calc(100% - 20px); margin-left: 20px; display: flex; justify-content: space-around; font-size: 0.8em; position: absolute; bottom: 0;">
                    <span>Jan</span><span>Feb</span><span>Mar</span><span>Apr</span><span>Mei</span><span>Jun</span><span>Jul</span><span>Agu</span><span>Sep</span><span>Okt</span><span>Nov</span><span>Des</span>
                </div>
            </div>
        </div>
    </div>

</body>

</html>