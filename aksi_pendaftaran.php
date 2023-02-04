<?php
include "koneksi.php";

$nama = $_POST['nama'];
$email = $_POST['email'];
$tgl_lahir = $_POST['tgl_lahir'];
$alamat = $_POST['alamat'];

$input = mysqli_query($mysqli,"insert into pendaftaran set nama='$nama',email='$email',tgl_lahir='$tgl_lahir',alamat='$alamat'");

if(input){
	header("location:tampil_pendaftaran.php?status=sukses");
}else{
	header("location:login.php?status=gagal");
}
?>