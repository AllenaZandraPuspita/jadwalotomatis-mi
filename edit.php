<?php
include 'koneksi.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM jadwal_dosen WHERE id='$id'");
$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Jadwal Dosen</title>
</head>
<body>
    <h2>Edit Jadwal Dosen</h2>
    <form method="post" action="update.php">
        <input type="hidden" name="id" value="<?= $d['id']; ?>">

        <label>Nama Dosen:</label><br>
        <input type="text" name="nama_dosen" value="<?= $d['nama_dosen']; ?>" required><br><br>

        <label>Mata Kuliah:</label><br>
        <input type="text" name="mata_kuliah" value="<?= $d['mata_kuliah']; ?>" required><br><br>

        <label>Hari:</label><br>
        <input type="text" name="hari" value="<?= $d['hari']; ?>" required><br><br>

        <label>Jam:</label><br>
        <input type="time" name="jam" value="<?= $d['jam']; ?>" required><br><br>

        <label>Ruang:</label><br>
        <input type="text" name="ruang" value="<?= $d['ruang']; ?>" required><br><br>

        <input type="submit" value="Update Jadwal">
    </form>
</body>
</html>
