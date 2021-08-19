<?php
	include '../koneksi.php';
	$uname = $_POST['uname'];
	$pass = $_POST['pass'];
	$nama = $_POST['nama'];
	$query = mysqli_query($koneksi,"insert into admin values ('$uname', '$pass', '$nama')") or die(mysqli_error($koneksi));
	if($query){
		header("location: tambahadmin.php?pesan=berhasil");	
	}
	else{
		header("location: tambah.php?pesan=gagal");	
	}	
	
	
?>
