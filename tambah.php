<!DOCTYPE html>
<html>

<head>
	<title>DATA</title>
</head>

<body>

	<h2>DATA PEMBELI HP DI GII PHONE</h2>
	<br />
	<a href="index.php">KEMBALI KE LOGIN</a>
	<br>
	<br>
	<a href="admin.php">KEMBALI KE HAL ADMIN</a>
	<br />
	<br />
	<h3>TAMBAH NAMA HANDPHONE</h3>
	<form method="POST" action="tambah_aksi.php">
		<table>
			<tr>
				<td>No</td>
				<td><input type="text" name="no"></td>
			</tr>
			<tr>
				<td>Nama Handphone</td>
				<td><input type="text" name="nama_penyewa"></td>
			</tr>
			<tr>
				<td>Harga</td>
				<td><input type="text" name="kamar"></td>
			</tr>
			<tr>
				<td>Tanggal Beli</td>
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