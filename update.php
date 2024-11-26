<?php
include 'koneksi.php';
$no = $_POST['no'];
$nama_penyewa = $_POST['nama_penyewa'];
$kamar = $_POST['kamar'];
$tanggal_sewa = $_POST['tanggal_sewa'];
mysqli_query($koneksi, "UPDATE menu set nama_penyewa='$nama_penyewa', kamar='$kamar', tanggal_sewa='$tanggal_sewa' WHERE no='$no'");
header("location:admin.php");
