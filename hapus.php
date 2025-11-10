<?php
include 'koneksi.php';
$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM jadwal_dosen WHERE id='$id'");
header("location:index.php");
?>
