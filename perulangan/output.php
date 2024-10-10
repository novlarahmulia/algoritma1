<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Perulangan Nama Novla</title>
</head>
<body>
    <h1>Hasil Perulangan Nama Novla</h1>
    <form action="input.php" method="post">

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jumlah = $_POST['jumlah'];

        for ($i = 0; $i < $jumlah; $i++) {
            echo "<p>nama saya adalah Novla</p>";
        }
    } else {
        echo "<p>Data tidak valid. Silakan kembali dan coba lagi.</p>";
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
