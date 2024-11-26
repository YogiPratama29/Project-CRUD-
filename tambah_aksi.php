<?php
// koneksi database
include 'koneksi.php';

// menangkap data yang di kirim dari form
$no = $_POST['no'];
$nama_penyewa = $_POST['nama_penyewa'];
$kamar = $_POST['kamar'];
$tanggal_sewa = $_POST['tanggal_sewa'];

// menginput data ke database
mysqli_query($koneksi, "insert into menu values('$no','$nama_penyewa','$kamar','$tanggal_sewa')");

// mengalihkan halaman kembali ke index.php
header("location:admin.php");
