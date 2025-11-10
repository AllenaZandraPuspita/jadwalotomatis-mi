<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama_dosen = trim($_POST['nama_dosen']);
$mata_kuliah = trim($_POST['mata_kuliah']);
$hari = trim($_POST['hari']);
$jam = $_POST['jam'];
$ruang = trim($_POST['ruang']);

if ($nama_dosen != "" && $mata_kuliah != "" && $hari != "" && $jam != "" && $ruang != "") {
    mysqli_query($koneksi, "UPDATE jadwal_dosen SET 
        nama_dosen='$nama_dosen', 
        mata_kuliah='$mata_kuliah', 
        hari='$hari', 
        jam='$jam', 
        ruang='$ruang' 
        WHERE id='$id'");
    header("location:index.php");
} else {
    echo "Semua kolom wajib diisi!";
}
?>
