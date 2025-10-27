<!DOCTYPE html>
<html>

<head>
    <title>Form Komentar</title>
</head>

<body>
    <h2>BUKU TAMU</h2>
    <p>Komentar dan Saran Anda Sangat Kami Butuhkan<br>
        Untuk Meningkatkan Kualitas Situs Kami</p>
    <form method="post" action="tampilk komentar.php">
        <table>
            <tr>
                <td>Nama Anda</td>
                <td>:</td>
                <td><input type="text" name="nama" size="30" required></td>
            </tr>
            <tr>
                <td>Email Anda</td>
                <td>:</td>
                <td><input type="email" name="email" size="30" required></td>
            </tr>
            <tr>
                <td>Komentar Anda</td>
                <td>:</td>
                <td><textarea name="komentar" rows="5" cols="40" required></textarea></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>
                    <input type="submit" value="Kirim">
                    <input type="reset" value="Batal">
                </td>
            </tr>
        </table>
    </form>
</body>

</html>