<?php
include 'koneksi.php';
$no = $_GET['no'];
mysqli_query($koneksi, "DELETE FROM menu WHERE no='$no'");
header("location:admin.php?pesan=hapus");
