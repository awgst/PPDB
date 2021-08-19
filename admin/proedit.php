<?php
	include '../koneksi.php';
	$uname = $_POST['uname'];
	$pass = $_POST['pass'];
	$passlama = $_POST['passlama'];
	$passbaru = $_POST['passbaru'];
	$query = mysqli_query($koneksi,"update admin set pass='$passbaru' where uname='$uname'") or die(mysqli_error($koneksi));
	if($pass == $passlama){
		header("location: akunku.php?pesan=berhasil");	
	}
	else{
		header("location: akunku.php?pesan=gagal");	
	}	
	
	
?>
