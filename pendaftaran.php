<html>
<head>
	<title>Daftar</title>
</head>

<body>
	<h2><p align="center">Selamat Datang Di Halaman Pendaftaran |SMK Luqman Al-Hakim Kudus</p></h2>
	<p align="center"><a href="login.php">KEMBALI</a></p>
	<br>
	<form action="aksi_pendaftaran.php" method="POST">
		<fieldset>
	
			<table align="center">
				<tr>
					<td align="center">Nama</td>
					<td align="center">:</td>
					<td><input type="text" name="nama" placeholder="here..."></td>
				</tr>
				<tr>
					<td align="center">Email</td>
					<td align="center">:</td>
					<td><input type="email" name="email" placeholder="here..."></td>
				</tr>
				<tr>
					<td align="center">Tanggal Lahir</td>
					<td align="center">:</td>
					<td><input type="date" name="tgl_lahir" placeholder="here..."></td>
				</tr>
				<tr>
					<td align="center">Alamat</td>
					<td align="center">:</td>
					<td><textarea rows="5%" name="alamat" cols="25%" placeholder="here..."></textarea></td>
				</table>
				<table>
				<tr>
				<p align="center"><input type="submit" name="simpan" value="simpan"></p>
				</tr>
			</table>
		</fieldset>
	</form>
	<hr>
	<br>
	<p align="center">Copyright &copy; SMK Luqman Al-Hakim Kudus</p>
</body>
</html>
