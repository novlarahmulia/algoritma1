<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Keliling Lingkaran</title><center>
</head>
<body>
    <h1>Hitung Keliling Lingkaran</h1><center>
    <form method="post" action="output.php">
        <label for="jari_jari">Masukkan Jari-Jari Lingkaran:</label>
        <input type="number" step="any" name="jari_jari" id="jari_jari" required>
        <input type="submit" value="Hitung">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Mengambil input jari-jari
        $jari_jari = $_POST['jari_jari'];

        // Menghitung keliling
        $keliling = 2 * pi() * $jari_jari;

        // Menampilkan hasil
        echo "<h2>Hasil:</h2>";
        echo "Keliling lingkaran dengan jari-jari $jari_jari adalah " . number_format($keliling, 2) . ".";
    }
    ?>
</body>
</html>
