<html>
<?php

include "koneksi.php";
?>

<head>
	<title>Admin</title>
</head>
<body>
	<h2><p align="center"> Selamat Datang Di Halaman Admin</p></h2>
	<br>
	<h2 align="center"> Data Admin</h2>
	<a href="Login.php">Log Out|</a>
	<a href="tampil_pendaftaran.php">Pendaftaran|
	<br>
	<p align="center"><a href="ki_admin.php" >+ Tambah Admin</a></p>

	<table align="center" border="1" width="85%">
		<tr>
			<td align="center">No</td>
			<td align="center">Nama</td>
			<td align="center">Tanggal</td>
			<td align="center">Informasi</td>
			<td align="center">OPSI</td>
		</tr>
		<?php
			include "koneksi.php";
			$tampil = mysqli_query($mysqli,"select * from admin");
			$no = 1;
			while($hasil = mysqli_fetch_array($tampil)){
			?>
			<tr>
				<td align="center"><?php echo $no++; ?></td>
				<td align="center"><?php echo $hasil['nama']; ?></td>
				<td align="center"><?php echo $hasil['tanggal']; ?></td>
				<td align="center"><?php echo $hasil['informasi'];?></td>
				<td>
					<a href="edit.php?id=<?php echo $hasil ['id'];?>">Edit</a>
					<a href="hapus.php?hapus&id=<?php echo $hasil['id'];?>">Hapus</a>
				</td>
			</tr>
			<?php
				}

			?>
		</table>
		<hr>
		<br>
		<p>Copyright &copy;SMK Luqman Al-Hakim Kudus</p>
	</body>
	</html>