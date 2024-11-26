<!DOCTYPE html>
<html>
<head>
	<title>DATA PENYEWA HOTEL</title>
</head>
<body>
<br/>
    <a href="index.php">KEMBALI KE LOGIN</a>
	<br>
	<br>
	<a href="admin.php">KEMBALI KE HAL ADMIN</a>
	<br/>
	<br/>
	<h3>EDIT NAMA PENYEWA</h3>
	<?php 
		include 'koneksi.php';
		$data = mysqli_query($koneksi,"select * from menu");
		while($d = mysqli_fetch_array($data)){
		}
		?>
	<form method="POST" action="update.php">
		<table>
		    <tr>
				<td>No</td>
				<td><input type="text" name="no"></td>
			</tr>
			<tr>
				<td>Nama Penyewa</td>
				<td>
					<input type="hidden" name="no">
					<input type="text" name="nama_penyewa" value="">
				</td>
			</tr>
			<tr>
				<td>Kamar</td>
				<td><input type="text" name="kamar"></td>
			</tr>
            <tr>
				<td>Tanggal Sewa</td>
				<td><input type="text" name="tanggal_sewa"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" value="SIMPAN"></td>
			</tr>		
		</table>
	</form>
</body>
</html>