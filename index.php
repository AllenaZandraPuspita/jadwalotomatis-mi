<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Jadwal Otomatis Dosen allena</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h2>📘 Jadwal Otomatis Dosen Allena</h2>

    <a href="tambah.php">+ Tambah Jadwal Dosen</a>
    <br><br>
    <table border="1" cellpadding="8" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Dosen</th>
            <th>Mata Kuliah</th>
            <th>Hari</th>
            <th>Jam</th>
            <th>Ruang</th>
            <th>Aksi</th>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "SELECT * FROM jadwal_dosen");
        while($d = mysqli_fetch_array($data)){
        ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d['nama_dosen']; ?></td>
            <td><?= $d['mata_kuliah']; ?></td>
            <td><?= $d['hari']; ?></td>
            <td><?= $d['jam']; ?></td>
            <td><?= $d['ruang']; ?></td>
            <td>
                <a href="edit.php?id=<?= $d['id']; ?>">Edit</a> |
                <a href="hapus.php?id=<?= $d['id']; ?>" onclick="return confirm('Yakin ingin hapus data ini?')">Hapus</a>
            </td>
        </tr>
        <?php } ?>
    </table>

    <footer>
        <p>&copy; 2025 Program Studi Manajemen Informatika. Dokumen ini diverifikasi oleh Allena.</p>
    </footer>
    </body>
<<<<<<< HEAD
</html>
=======
<<<<<<< HEAD
</html>
=======
</html>
>>>>>>> e18855d417adfb7e95029652fa99fd5548b697c6
>>>>>>> d64970fbf0e0c55663e621963466b6f4db11617d
