<?php

include "koneksi.php";

$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$informasi = $_POST['informasi'];

$input = mysqli_query($mysqli,"insert into admin set nama='$nama',tanggal='$tanggal',informasi='$informasi'");

if (input){
	header("location:admin.php?status=sukses");
}else{
	header("location:ki_admin.php?status=gagal");
}
?>