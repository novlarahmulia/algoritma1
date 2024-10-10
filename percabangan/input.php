<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hitung Sisa Uang Saku</title>
</head>
<body>
    <h1>Hitung Sisa Uang Saku</h1>
    <form method="post" action="output.php">
        <label for="uang_saku">Jumlah Uang Saku:</label>
        <input type="number" id="uang_saku" name="uang_saku" required><br><br>
        
        <label for="pengeluaran">Jumlah Pengeluaran:</label>
        <input type="number" id="pengeluaran" name="pengeluaran" required><br><br>
        
        <input type="submit" value="Hitung Sisa">
    </form>
</body>
</html>
