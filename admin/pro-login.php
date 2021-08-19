<?php
	session_start();
	include 'koneksi.php';
	$email=$_POST['uname'];
	$pass=$_POST['pass'];
	$sql=mysqli_query($koneksi,"select * from admin where uname='$email' and pass='$pass'");
	$data=mysqli_num_rows($sql);
	$query=mysqli_fetch_array($sql);
	$id = $query['uname'];
	if ($data>0) {
		$_SESSION['login']="login";
		$_SESSION['uname']=$id;
		if($id=="196906211994121002"){
			$_SESSION['nama']="admin";
		}
		echo $id;
		//header("location: admin/index.php");
	}
	else{
		echo "string";
		//header("location:login-form.php?pesan=gagal");
	}
?>