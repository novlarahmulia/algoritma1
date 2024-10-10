<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hasil Keliling Lingkaran</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }
        .container {
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        button {
            padding: 10px;
            background-color: #007bff;
            color: white;
            border: none;
            cursor: pointer;
            margin-top: 20px;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Hasil Keliling Lingkaran</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $jari_jari = $_POST['jari_jari'];

        // Menghitung keliling
        $keliling = 2 * pi() * $jari_jari;

        echo "<h3>Jari-jari: $jari_jari</h3>";
        echo "<h3>Keliling Lingkaran: " . number_format($keliling, 2) . "</h3>";
    } else {
        echo "<h3>Silakan masukkan data dari <a href='input.php'>kembali</a>.</h3>";
    }
    ?>
    <button onclick="window.location.href='input.php'">Kembali</button>
    <a href="http://localhost/">
      <button>Localhost</button>
</a>
<a href="../">
      <button>Folder Awal</button>
</a>
</div>

</body>
</html>