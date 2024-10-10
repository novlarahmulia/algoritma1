<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Sisa Uang Saku</title>
</head>
<body>
    <h1>Hasil Sisa Uang Saku</h1>
    

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $uang_saku = $_POST['uang_saku'];
        $pengeluaran = $_POST['pengeluaran'];

        $sisa = $uang_saku - $pengeluaran;

        echo "<p>Jumlah Uang Saku: Rp " . number_format($uang_saku, 3, ',', '.') . "</p>";
        echo "<p>Jumlah Pengeluaran: Rp " . number_format($pengeluaran, 3, ',', '.') . "</p>";
        echo "<p>Sisa Uang Saku: Rp " . number_format($sisa, 3, ',', '.') . "</p>";
    } else {
        echo "<p>Data tidak valid. Silakan kembali dan masukkan data dengan benar.</p>";
    }
    ?>
    <button onclick= "window.location.href='input.php'">Kembali ke input</button>
    <a href="http://localhost/">
      <button>Localhost</button>
</a>
<a href="../">
      <button>Folder Awal</button>
</a>
</body>
</html>
