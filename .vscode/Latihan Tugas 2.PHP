<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <title>Daftar Produk — Tabel</title>
    <style>
        :root {
            --border: #3b3b3b;
            --header-bg: #f6cfa6;
            /* peach/header */
            --left-bg: #fff9c9;
            /* pale yellow left panel */
            --label-bg: #00d36a;
            /* green label cells */
            --field-bg: #ff66ee;
            /* magenta/pink field cells */
            --gap: 6px;
            --font-family: "Georgia", "Times New Roman", serif;
        }

        body {
            background: #f3f3f3;
            font-family: var(--font-family);
            padding: 20px;
            display: flex;
            justify-content: center;
        }

        .card {
            width: 1000px;
            max-width: 100%;
            border: 6px solid var(--border);
            box-sizing: border-box;
            background: white;
            padding: 6px;
        }

        table.product {
            width: 100%;
            border-collapse: separate;
            border-spacing: var(--gap);
            table-layout: fixed;
        }

        /* Header */
        .product thead th {
            background: var(--header-bg);
            text-align: center;
            font-size: 28px;
            padding: 10px 0;
            border: 3px solid var(--border);
        }

        /* Body cells */
        .product tbody td {
            padding: 0;
            vertical-align: top;
        }

        /* Left image column */
        .left-col {
            width: 27%;
            background: var(--left-bg);
            border: 3px solid var(--border);
            padding: 22px;
            box-sizing: border-box;
        }

        .left-col img {
            display: block;
            max-width: 100%;
            height: auto;
            border-radius: 4px;
            box-shadow: 0 0 0 2px rgba(0, 0, 0, 0.02) inset;
            background: white;
        }

        /* Label cells (Nama Produk / Harga / Fitur Produk) */
        .label {
            width: 13%;
            background: var(--label-bg);
            border: 3px solid var(--border);
            padding: 16px;
            box-sizing: border-box;
            font-weight: bold;
            font-size: 18px;
            color: #003300;
        }

        /* Field cells (right-side) */
        .field {
            background: var(--field-bg);
            border: 3px solid var(--border);
            padding: 18px;
            box-sizing: border-box;
            font-size: 18px;
            line-height: 1.5;
            color: #2a002a;
        }

        /* Make the feature list look like the original */
        .feature-list {
            margin: 6px 0 0 18px;
            padding-left: 18px;
        }

        /* Small states for price */
        .price {
            font-weight: 700;
        }

        /* Responsive tweaks */
        @media (max-width:800px) {
            .card {
                padding: 4px;
            }

            .label {
                font-size: 16px;
                padding: 12px;
            }

            .field {
                font-size: 16px;
                padding: 12px;
            }

            .left-col {
                padding: 12px;
            }
        }
    </style>
</head>

<body>
    <div class="card" role="region" aria-label="Daftar Produk">
        <table class="product" aria-describedby="note">
            <thead>
                <tr>
                    <th colspan="3">DAFTAR PRODUK</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <!-- Left image cell (tall, spans rows visually) -->
                    <td class="left-col" rowspan="3">
                        <!-- GANTI src di bawah dengan path gambarmu -->
                        <img src="/mnt/data/4c2cdf20-dcc7-4405-be25-a228f79420a7.png" alt="https://share.google/images/lttn4kD20yZlZEXo9" />
                    </td>

                    <!-- Nama label -->
                    <td class="label">Nama<br />Produk</td>

                    <!-- Nama field -->
                    <td class="field">Canon EOS M10 Kit EF-M 15-45mm</td>
                </tr>

                <tr>
                    <!-- Harga label -->
                    <td class="label">Harga</td>

                    <!-- Harga field -->
                    <td class="field price">Rp 4.899.000</td>
                </tr>

                <tr>
                    <!-- Fitur label -->
                    <td class="label">Fitur<br />Produk</td>

                    <!-- Fitur field (list) -->
                    <td class="field">
                        <ul class="feature-list">
                            <li>Kamera mirrorless</li>
                            <li>Efektivitas Piksel : 18 MP</li>
                            <li>Tipe sensor : CMOS DIGIC 6</li>
                            <li>Layar : 3.0 Inch</li>
                            <li>Memiliki lampu flash dengan jarak jangkauan hingga 5 meter</li>
                        </ul>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</body>

</html>