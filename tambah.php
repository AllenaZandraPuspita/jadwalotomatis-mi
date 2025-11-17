<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Jadwal Dosen</title>
</head>
<body>
    <h2>Tambah Jadwal Dosen</h2>
    <form method="post" action="input_data.php">
        <label>Nama Dosen:</label><br>
        <input type="text" name="nama_dosen" required><br><br>

        <label>Mata Kuliah:</label><br>
        <input type="text" name="mata_kuliah" required><br><br>

        <label>Hari:</label><br>
        <input type="text" name="hari" required><br><br>

        <label>Jam:</label><br>
        <input type="time" name="jam" required><br><br>

        <label>Ruang:</label><br>
        <input type="text" name="ruang" required><br><br>

        <input type="submit" value="Simpan Jadwal">
    </form>
</body>
</html>
