<?php

	include "koneksi.php";
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$tanggal = $_POST['tanggal'];
	$informasi = $_POST['informasi'];

	mysqli_query($mysqli,"update tampil_admin set nama='$nama',tanggal='$tanggal',informasi='$informasi' where id='$id'");

	header("location:admin.php");
?>