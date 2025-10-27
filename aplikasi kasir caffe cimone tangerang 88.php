<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Point of Sale - CAFFE CIMONE TANGERANG 88</title>
    <style>
        /* CSS UTAMA */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            display: flex;
        }

        .sidebar {
            width: 200px;
            background-color: #333;
            color: white;
            padding: 20px 0;
            min-height: 100vh;
            box-shadow: 2px 0 5px rgba(0, 0, 0, 0.1);
        }

        .sidebar h2 {
            text-align: center;
            margin-bottom: 30px;
            font-size: 1.5em;
            color: #fff;
            padding: 0 15px;
        }

        .user-info {
            display: flex;
            align-items: center;
            padding: 10px 15px;
            margin-bottom: 20px;
            border-bottom: 1px solid #444;
        }

        .user-info .avatar {
            width: 40px;
            height: 40px;
            background-color: #ddd;
            border-radius: 50%;
            margin-right: 10px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            color: #333;
        }

        /* Gaya Navigasi Sidebar */
        .nav-menu {
            padding: 0 15px;
        }

        .nav-menu a {
            text-decoration: none;
            display: block;
            padding: 10px 0;
            color: #bbb;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .nav-menu a.active {
            color: white;
            background-color: #555;
            padding-left: 15px;
            border-radius: 4px;
        }

        .nav-menu a:not(.active):hover {
            color: white;
            background-color: #555;
        }

        .nav-menu i {
            margin-right: 10px;
        }

        /* Konten Utama & Header */
        .main-content {
            flex-grow: 1;
            padding: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
            background-color: white;
            padding: 15px 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
        }

        .header h1 {
            margin: 0;
            font-size: 1.8em;
            color: #333;
        }

        .header .date {
            font-size: 0.9em;
            color: #666;
        }

        /* Gaya Grid Dashboard & Kotak Statistik */
        .stats-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
            margin-bottom: 20px;
        }

        .stat-box {
            background-color: white;
            color: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            height: 120px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            cursor: pointer;
        }

        .stat-box:nth-child(1) {
            background-color: #03A9F4;
        }

        /* Meja Aktif */
        .stat-box:nth-child(2) {
            background-color: #8BC34A;
        }

        /* Supplier Bahan */
        .stat-box:nth-child(3) {
            background-color: #FFC107;
        }

        /* Karyawan */
        .stat-box:nth-child(4) {
            background-color: #FF5722;
        }

        /* Total Pesanan */
        .stat-box:nth-child(5) {
            background-color: #00BCD4;
        }

        /* Bahan Masuk */
        .stat-box:nth-child(6) {
            background-color: #9C27B0;
        }

        /* Laporan Menu */
        .stat-box:nth-child(7) {
            background-color: #E91E63;
        }

        /* Laporan Penjualan */
        .stat-box:nth-child(8) {
            background-color: #4E342E;
        }

        /* Laporan Keuangan */
        .stat-box .number {
            font-size: 2.5em;
            font-weight: bold;
        }

        .stat-box .detail {
            font-size: 0.8em;
            text-align: right;
            border-top: 1px solid rgba(255, 255, 255, 0.3);
            padding-top: 5px;
            margin-top: 10px;
            cursor: pointer;
        }

        /* Gaya Menu Bawah */
        .menu-grid {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .menu-box {
            color: white;
            padding: 15px;
            border-radius: 5px;
            text-align: center;
            font-weight: bold;
            cursor: pointer;
            transition: opacity 0.2s;
        }

        .menu-box:nth-child(1) {
            background-color: #3F51B5;
        }

        .menu-box:nth-child(2) {
            background-color: #CDDC39;
        }

        .menu-box:nth-child(3) {
            background-color: #26A69A;
        }

        .menu-box:nth-child(4) {
            background-color: #FF9800;
        }

        .footer {
            text-align: center;
            margin-top: 30px;
            font-size: 0.75em;
            color: #666;
        }

        /* Gaya Konten Halaman (yang berubah) */
        .page-content {
            background-color: white;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            min-height: 500px;
        }

        .page-content h1 {
            color: #333;
            border-bottom: 2px solid #ddd;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        /* Gaya Gambar dan Tabel */
        .content-image {
            max-width: 100%;
            height: auto;
            border-radius: 8px;
            margin-top: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        .data-table th,
        .data-table td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        .data-table th {
            background-color: #f2f2f2;
        }

        .logout-message {
            text-align: center;
            padding: 50px;
            background-color: #fff;
            border-radius: 5px;
            margin-top: 50px;
        }
    </style>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>

<body>

    <div class="sidebar">
        <h2>Point of Sale</h2>
        <div class="user-info">
            <div class="avatar">RA</div>
            <div>
                <div style="font-weight: bold; color: white;">Rassya Agung</div>
            </div>
        </div>
        <div style="padding: 0 15px; font-size: 0.8em; color: #888; margin-bottom: 10px;">NAVIGASI MENU</div>

        <div class="nav-menu">
            <a href="#" class="active" data-target="dashboard"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
            <a href="#" data-target="master_bahan"><i class="fas fa-database"></i>Master Bahan</a>
            <a href="#" data-target="pesanan_transaksi"><i class="fas fa-utensils"></i>**Pesanan (Transaksi)**</a>
            <a href="#" data-target="laporan_keuangan"><i class="fas fa-chart-line"></i>Laporan Keuangan</a>
            <a href="#" data-target="tambah_karyawan" style="margin-top: 10px;"><i class="fas fa-user-plus"></i>Tambah Karyawan</a>
            <a href="#" data-target="poster_caffe"><i class="fas fa-image"></i>Poster Caffe</a>
            <a href="#" data-target="ganti_password"><i class="fas fa-lock"></i>Ganti Password</a>
            <a href="#" data-target="logout" style="margin-top: 20px; color: #f44336;"><i class="fas fa-sign-out-alt"></i>Keluar</a>
        </div>
    </div>

    <div class="main-content">
        <div class="header">
            <h1>CAFFE CIMONE TANGERANG 88</h1>
            <div class="date">Rabu, 15 Oktober 2025 18:12:00 PM</div>
        </div>

        <div id="content-area">

            <div id="dashboard" class="page-content" style="display: block;">
                <div class="stats-grid">
                    <div class="stat-box">
                        <div class="number">5</div>
                        <div class="label">Meja Aktif Hari Ini</div>
                        <div class="detail" data-target="pesanan_transaksi">Lihat detail ⓘ</div>
                    </div>
                    <div class="stat-box">
                        <div class="number">12</div>
                        <div class="label">Jumlah Supplier Bahan</div>
                        <div class="detail" data-target="master_bahan">Lihat detail ⓘ</div>
                    </div>
                    <div class="stat-box">
                        <div class="number">8</div>
                        <div class="label">Jumlah Karyawan</div>
                        <div class="detail" data-target="tambah_karyawan">Lihat detail ⓘ</div>
                    </div>
                    <div class="stat-box">
                        <div class="number">58</div>
                        <div class="label">Total Pesanan Hari Ini</div>
                        <div class="detail" data-target="laporan_keuangan">Lihat detail ⓘ</div>
                    </div>

                    <div class="stat-box" style="background-color: #00BCD4;">
                        <div class="number">0</div>
                        <div class="label">Bahan Masuk Hari Ini</div>
                        <div class="detail" data-target="stok_bahan">Lihat detail ⓘ</div>
                    </div>
                    <div class="stat-box">
                        <div class="label" style="font-size: 1.5em; font-weight: bold;">Laporan</div>
                        <div class="label">Menu Terlaris</div>
                        <div class="detail" data-target="daftar_menu">Lihat detail ⓘ</div>
                    </div>
                    <div class="stat-box">
                        <div class="label" style="font-size: 1.5em; font-weight: bold;">Laporan</div>
                        <div class="label">Penjualan Harian</div>
                        <div class="detail" data-target="laporan_keuangan">Lihat detail ⓘ</div>
                    </div>
                    <div class="stat-box">
                        <div class="label" style="font-size: 1.5em; font-weight: bold;">Laporan</div>
                        <div class="label">Keuangan (Untung/Rugi)</div>
                        <div class="detail" data-target="laporan_keuangan">Lihat detail ⓘ</div>
                    </div>
                </div>

                <div class="menu-grid">
                    <div class="menu-box" data-target="kategori_menu">GOLONGAN (KATEGORI MENU)</div>
                    <div class="menu-box" data-target="jenis_minuman">JENIS MINUMAN</div>
                    <div class="menu-box" data-target="daftar_menu">PRODUK (DAFTAR MENU)</div>
                    <div class="menu-box" data-target="stok_bahan">BARANG (STOK BAHAN)</div>
                </div>
            </div>

            <div id="master_bahan" class="page-content" style="display: none;">
                <h1>Halaman Master Bahan</h1>
                <p>Daftar bahan baku yang tersedia di gudang.</p>
                <img src="https://placeimg.com/800/400/food/bahan-caffe" alt="Gambar Bahan Baku Caffe" class="content-image">
            </div>

            <div id="pesanan_transaksi" class="page-content" style="display: none;">
                <h1>Halaman Pesanan (Transaksi)</h1>
                <p>Antarmuka untuk melakukan pemesanan dan pembayaran.</p>
                <img src="https://placeimg.com/800/400/tech/transaksi" alt="Gambar Transaksi Pelanggan" class="content-image">
            </div>

            <div id="laporan_keuangan" class="page-content" style="display: none;">
                <h1>Halaman Laporan Keuangan</h1>
                <p>Grafik dan ringkasan pengeluaran kafe.</p>
                <img src="https://placeimg.com/800/400/business/grafik" alt="Gambar Grafik Keuangan" class="content-image">
            </div>

            <div id="tambah_karyawan" class="page-content" style="display: none;">
                <h1>Halaman Tambah Karyawan</h1>
                <p>Formulir dan daftar karyawan kafe.</p>
                <img src="https://placeimg.com/800/400/people/karyawan-caffe" alt="Gambar Karyawan Caffe" class="content-image">
            </div>

            <div id="poster_caffe" class="page-content" style="display: none;">
                <h1>Halaman Poster Caffe</h1>
                <p>Tampilan poster promosi untuk caffe.</p>
                <img src="https://placeimg.com/600/800/any/poster" alt="Gambar Poster Caffe" class="content-image" style="max-width: 600px;">
            </div>

            <div id="ganti_password" class="page-content" style="display: none;">
                <h1>Halaman Ganti Password</h1>
                <p>Formulir untuk mengubah kata sandi akun pengguna.</p>
                <p>Formulir Ganti Password...</p>
            </div>

            <div id="logout" style="display: none;">
                <div class="logout-message">
                    <h1>Anda telah berhasil keluar dari sistem.</h1>
                </div>
            </div>

            <div id="kategori_menu" class="page-content" style="display: none;">
                <h1>Halaman Kategori Menu</h1>
                <p>Pengaturan kategori menu (Makanan, Kopi, Snack).</p>
                <img src="https://placeimg.com/800/400/food/menu-caffe" alt="Gambar Menu Caffe" class="content-image">
            </div>

            <div id="jenis_minuman" class="page-content" style="display: none;">
                <h1>Halaman Jenis Minuman</h1>
                <p>Pengaturan jenis minuman spesifik (Espresso, Manual Brew, Tea).</p>
                <img src="https://placeimg.com/800/400/food/minuman-kopi" alt="Gambar Minuman Kopi" class="content-image">
            </div>

            <div id="daftar_menu" class="page-content" style="display: none;">
                <h1>Halaman Daftar Menu</h1>
                <p>Daftar lengkap harga dan item menu kafe.</p>
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama Menu</th>
                            <th>Kategori</th>
                            <th>Harga (Rp)</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>M001</td>
                            <td>Cappuccino</td>
                            <td>Kopi</td>
                            <td>25.000</td>
                        </tr>
                        <tr>
                            <td>M002</td>
                            <td>Nasi Goreng</td>
                            <td>Makanan Berat</td>
                            <td>35.000</td>
                        </tr>
                        <tr>
                            <td>M003</td>
                            <td>Iced Lemon Tea</td>
                            <td>Non-Kopi</td>
                            <td>18.000</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div id="stok_bahan" class="page-content" style="display: none;">
                <h1>Halaman Stok Bahan</h1>
                <p>Tabel ketersediaan stok bahan baku.</p>
                <table class="data-table">
                    <thead>
                        <tr>
                            <th>ID Bahan</th>
                            <th>Nama Bahan</th>
                            <th>Stok Saat Ini</th>
                            <th>Unit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>B001</td>
                            <td>Biji Kopi Arabika</td>
                            <td>15</td>
                            <td>Kg</td>
                        </tr>
                        <tr>
                            <td>B002</td>
                            <td>Susu UHT Full Cream</td>
                            <td>50</td>
                            <td>Liter</td>
                        </tr>
                        <tr>
                            <td>B003</td>
                            <td>Gula Pasir</td>
                            <td>25</td>
                            <td>Kg</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </div>

        <div class="footer">
            Copyright © 2016- 2025 "Kursus Membuat Web". All rights reserved. | Version 1.1.0
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function showPage(targetId) {
                const allPages = document.querySelectorAll('#content-area > div');
                allPages.forEach(page => {
                    page.style.display = 'none';
                });

                const targetPage = document.getElementById(targetId);
                if (targetPage) {
                    targetPage.style.display = 'block';
                }
            }

            function setActiveLink(clickedLink) {
                const navLinks = document.querySelectorAll('.nav-menu a');
                navLinks.forEach(link => {
                    link.classList.remove('active');
                });
                clickedLink.classList.add('active');
            }

            const navLinks = document.querySelectorAll('.nav-menu a');
            navLinks.forEach(link => {
                link.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('data-target');
                    showPage(targetId);
                    setActiveLink(this);
                });
            });

            const menuBoxes = document.querySelectorAll('.menu-box, .stat-box .detail');
            menuBoxes.forEach(box => {
                box.addEventListener('click', function(e) {
                    e.preventDefault();
                    const targetId = this.getAttribute('data-target');
                    showPage(targetId);

                    const sidebarLink = document.querySelector(`.nav-menu a[data-target="${targetId}"]`);
                    if (sidebarLink) {
                        setActiveLink(sidebarLink);
                    }
                });
            });

            showPage('dashboard');
        });
    </script>
</body>

</html>