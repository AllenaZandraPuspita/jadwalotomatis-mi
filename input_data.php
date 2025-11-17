<?php
include 'koneksi.php';

$nama_dosen = $_POST['nama_dosen'];
$mata_kuliah = $_POST['mata_kuliah'];
$hari = $_POST['hari'];
$jam = $_POST['jam'];
$ruang = $_POST['ruang'];

mysqli_query($koneksi, "INSERT INTO jadwal_dosen VALUES('', '$nama_dosen', '$mata_kuliah', '$hari', '$jam', '$ruang')");

header("location:index.php");
?>
