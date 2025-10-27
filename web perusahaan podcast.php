<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nama Perusahaan Podcast Anda</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>

    <aside class="sidebar">
        <div class="logo">
            <h2>PODCAST Co.</h2>
        </div>
        <nav class="nav-menu">
            <ul>
                <li><a href="#home"><i class="fas fa-home"></i> Beranda</a></li>
                <li><a href="#podcast"><i class="fas fa-headphones"></i> Semua Podcast</a></li>
                <li><a href="#episode-terbaru"><i class="fas fa-list-ul"></i> Episode Terbaru</a></li>
                <li><a href="#tentang"><i class="fas fa-users"></i> Tentang Kami</a></li>
                <li><a href="#kontak"><i class="fas fa-envelope"></i> Kontak</a></li>
            </ul>
        </nav>
    </aside>

    <main class="main-content">

        <section id="home" class="hero-section">
            <div class="hero-overlay">
                <h1>Suara Inspirasi, Cerita Tanpa Batas</h1>
                <p>Dengarkan, Belajar, dan Berkembang bersama podcast-podcast unggulan kami.</p>
                <a href="#episode-terbaru" class="cta-button">Dengarkan Episode Terbaru</a>
            </div>
        </section>

        <section id="episode-terbaru" class="episode-section">
            <h2>Episode Terbaru</h2>
            <div class="episode-list">
                <div class="episode-card">
                    <img src="placeholder-cover1.jpg" alt="Cover Episode 1">
                    <h3>Rahasia Sukses di Era Digital</h3>
                    <p>Wawancara dengan pakar marketing terkemuka.</p>
                    <audio controls>
                        <source src="episode1.mp3" type="audio/mpeg">
                        Browser Anda tidak mendukung audio player.
                    </audio>
                </div>
                <div class="episode-card">
                    <img src="placeholder-cover2.jpg" alt="Cover Episode 2">
                    <h3>Filosofi Hidup Minimalis</h3>
                    <p>Cara menerapkan gaya hidup yang lebih bermakna.</p>
                    <audio controls>
                        <source src="episode2.mp3" type="audio/mpeg">
                        Browser Anda tidak mendukung audio player.
                    </audio>
                </div>
            </div>
        </section>

        <section id="podcast" class="other-section">
            <h2>Daftar Semua Podcast</h2>
            <p>Di sini akan ada daftar lengkap serial podcast yang Anda produksi.</p>
        </section>

        <section id="tentang" class="other-section">
            <h2>Tentang Kami</h2>
            <p>Perusahaan kami didirikan pada tahun 2024 dengan misi untuk....</p>
        </section>

        <section id="kontak" class="other-section">
            <h2>Hubungi Kami</h2>
            <form action="#">
                <input type="text" placeholder="Nama Anda">
                <input type="email" placeholder="Email Anda">
                <textarea placeholder="Pesan Anda"></textarea>
                <button type="submit">Kirim Pesan</button>
            </form>
        </section>

        <footer>
            <p>&copy; 2025 Nama Perusahaan Podcast Anda. All Rights Reserved.</p>
        </footer>

    </main>

    <script src="script.js"></script>
</body>

</html>