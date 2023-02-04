<html>
<?php

include "koneksi.php";
?>
<head>
	<title>pendaftaran</title>
</head>
<style>

.dropbtn {
    background-color: #009BA3;
    color: black;
    padding: 16px;
    font-size: 16px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #9CEFFF;
    min-width: 200px;
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color:#8CCDFF;}
.dropdown:hover .dropdown-content {display: block;}
.dropdown:hover .dropbtn {background-color: #E3E3E3;}

</style>
</head>

<div class="dropdown">
<button class="dropbtn">Menu</button>
<div class="dropdown-content">

<a href="pendaftaran.php">+Tambah Pendaftaran</a>
<a href="login.php">Log Out</a>
<a href="admin.php">Admin</a>

</div>
</div>
<body>
	<h2 align="center"> Selamat Datang Di Halaman Pendaftaran</h2>
	<br>
	<h2 align="center"> Data Pendaftaran</h2>
	
	<table align="center" border="1" width="85%">
		<tr>
			<td align="center">No</td>
			<td align="center"> Nama</td>
			<td align="center"> Email</td>
			<td align="center">Tanggal Lahir</td>
			<td align="center">Alamat</td>
			<td align="center">OPSI</td>
		</tr>
		<?php
		include "koneksi.php";
		$tampil = mysqli_query($mysqli,"select * from pendaftaran");
		$no = 1;
		while ($hasil = mysqli_fetch_array($tampil)){
			?>
		<tr>
			<td align="center"><?php echo $no++; ?></td>
			<td align="center"><?php echo $hasil['nama']; ?></td>
			<td align="center"><?php echo $hasil['email']; ?></td>
			<td align="center"><?php echo $hasil['tgl_lahir']; ?></td>
			<td align="center"><?php echo $hasil['alamat']; ?></td>
			<td>
				<a href="edit.php?id<?php echo $hasil['id'];?>">Edit</a>
				<a href="hapus.php?hapus&id<?php echo $hasil['id'];?>">Hapus</a>
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
</html>



