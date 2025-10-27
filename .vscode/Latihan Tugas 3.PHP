<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Profil</title>
    <style>
        body {
            font-family: "Times New Roman", Times, serif;
            background: #ffffff;
            padding: 30px;
        }

        /* bullet line like slide */
        .slide-line {
            display: flex;
            align-items: center;
            gap: 12px;
            margin-bottom: 12px;
            font-size: 28px;
        }

        .bullet {
            width: 10px;
            height: 10px;
            background: #111;
            border-radius: 50%;
            display: inline-block;
        }

        /* card */
        .card {
            width: 720px;
            /* sesuaikan bila perlu */
            border: 2px solid #7b9bc1;
            padding: 18px 20px 20px 22px;
            box-sizing: border-box;
            position: relative;
            font-size: 20px;
            /* ukuran huruf */
            color: #111;
            background: #fff;
        }

        /* strip gelap di atas kotak */
        .card::before {
            content: "";
            display: block;
            height: 8px;
            background: linear-gradient(#2b2b2b, #1b1b1b);
            position: absolute;
            left: -2px;
            /* sama seperti border thickness */
            right: -2px;
            top: -10px;
        }

        /* jarak antar baris teks */
        .card p {
            margin: 6px 0;
            line-height: 1.4;
        }
    </style>
</head>

<body>
    <div class="slide-line">
        <span class="bullet" aria-hidden="true"></span>
        <div>Buatlah Script program sehingga muncul tulisan seperti di gambar berikut</div>
    </div>

    <div class="card" role="region" aria-label="Kartu profil">
        <p>Nama Saya : Rassya Agung Nauvallino</p>
        <p>Alamat : Jl.Nila Raya No. 161 Perum 1-Tangerang</p>
        <p>TTL : Tangerang, 09 November 2005</p>
        <p>Telp : 08119892882</p>
    </div>
</body>

</html>