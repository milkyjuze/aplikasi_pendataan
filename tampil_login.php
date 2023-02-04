<html>
<?php
	include "koneksi.php";
?>

<head>
	<title>login</title>
</head>
<body>
	<h2 align="center">Selamat Datang Di Halaman Login</h2>
	<br>
	<h2 align="center">Data Pengguna</h2>
	<a href="admin.php">Admin|</a>
	<a href="tampil_pendaftaran.php">Pendaftaran|</a>
	<br>
	<table align="center" border="1" width="85%">
		<tr>
			<td align="center">username</td>
			<td align="center">password</td>
			<td align="center">OPSI</td>
		</tr>
		<?php
		include "koneksi.php";
		$tampil = mysqli_query($mysqli,"select * from login");
		$no = 1;
		while ($hasil = mysqli_fetch_array($tampil)){
			?>
		<tr>
			<td align="center"><?php echo $no++; ?></td> 
			<td align="center"><?php echo $hasil['username']; ?></td>
			<td align="center"><?php echo $hasil['password']; ?></td>
			<td>
				<a href="edit_login.php<?php echo $hasil['id'];?>">Edit</a>
				<a href="hapus_login.php?hapus&id<?php echo $hasil['id']?>">Hapus</a>
			</td>
		</tr>
		<?php
			}
		
		?>
	</table>
	<hr>
	<br>
	<p align="center">Copyright &copy; SMK Luqman Al-Hakim Kudus</p>
</body>