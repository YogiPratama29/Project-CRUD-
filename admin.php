<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>DATA PENYEWA HOTEL</title>
</head>

<body>
	<p align="center">SELAMAT DATANG ADMIN</p>
	<p align="center">DI BAWAH INI ADALAH DAFTAR NAMA PENYEWA HOTEL NUSANTARA</p>
	<table border="1" align="center">
		<tr>
			<th>No</th>
			<th>Nama Handphone</th>
			<th>Harga</th>
			<th>Tanggal Beli</th>
			<th>Opsi</th>
		</tr>
		<a href="index.php">- KEMBALI KE LOGIN</a>
		<br>
		<br>
		<a href="tambah.php">+ TAMBAH PENYEWA</a>
		<?php
		include 'koneksi.php';
		$no = 1;
		$data = mysqli_query($koneksi, "select * from menu");
		while ($d = mysqli_fetch_array($data)) {
		?>
			<tr>

				<td><?php echo $no++; ?></td>
				<td><?php echo $d['nama_handphone']; ?></td>
				<td><?php echo $d['harga']; ?></td>
				<td><?php echo $d['tanggal_beli']; ?></td>
				<td>
					<a href="edit.php?id=<?php echo $d['no']; ?>">EDIT</a>
					<a href="hapus.php?id=<?php echo $d['no']; ?>">HAPUS</a>
				</td>
			</tr>

			</tr>
		<?php
		}
		?>
	</table>
</body>

</html>