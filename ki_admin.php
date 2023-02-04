<html>
<head>
	<title>Admin</title>
</head>

<h2>Selamat Datang di Beranda SMK Luqman Al-Hakim Kudus</h2>
<br>
<body>
	<form action="aksi_admin.php" method="POST">
		<p align="center"><a href="admin.php">KEMBALI</a></p>
		<fieldset>
			<table align="center">
				<tr>
					<td align="center">Nama</td>
					<td align="center">:</td>
					<td><input type="text" name="nama" placeholder="here..."></td>
				</tr>
				<tr>
					<td align="center">Tanggal</td>
					<td align="center">:</td>
					<td><input type="date" name="tanggal" placeholder="here..."></td>
				</tr>
				<tr>
					<td align="center">Informasi</td>
					<td align="center">:</td>
					<td><textarea name="informasi" rows="5%" cols="25% " placeholder="here..."></textarea></td>
				</tr>
			</table>
			<table>
				<p align="center"><input type="submit" name="kirim" value="klik!"></p>
			</table>
		</fieldset>
	</form>
	<hr>
	<br>
	<p align="center">Copyright &copy;SMK Luqman Al-Hakim Kudus</p>
</body>
</html>