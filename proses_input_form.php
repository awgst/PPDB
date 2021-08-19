<?php
include'koneksi.php';
 //sesuai name form
$id = $_POST['id'];
$regis = $_POST['regist'];
$nama = $_POST['nama'];
$nisn = $_POST['nisn'];
$asal = $_POST['asal'];
$tempat = $_POST['tempat'];
$tgl = $_POST['tgl'];
$jk = $_POST['jk'];
$agama = $_POST['agama'];
$alamat = $_POST['alamat'];
$namawali = $_POST['namawali'];
$alamatwali = $_POST['alamatwali'];
$jarak = $_POST['jarak'];
$nama_file = $_FILES['file']['name'];
$ukuran_file = $_FILES['file']['size'];
$tmp_file =$_FILES['file']['tmp_name'];

$path = "images/".$nama_file;

if ($ukuran_file <= 3000000) {
	if (move_uploaded_file($tmp_file, $path)) {
		$query = mysqli_query($koneksi, "INSERT INTO `siswa` VALUES ('$id', '$regis', '$nama', '$nisn', '$asal', '$tempat', '$tgl', '$jk', '$agama', '$alamat', '$namawali', '$alamatwali', '$jarak','$nama_file')");

		if($query!="") {
			echo "<h3>Selamat, Anda berhasil mendaftar silahkan cetak bukti pendaftaran pada link berikut\n";
			echo "<a href='cetak.php'>Cetak</a></h3>";
		}
		else
		{
			echo "<h3>NISN yang anda daftarkan telah terdaftar atau terdapat kesalahan teknis, silahkan mencoba dalam beberapa saat lagi..</h3>";
			echo "<h3><br><a href='index.html'>Kembali</a><br></h3>";
		}
	} else {
		echo "<h3>Pendaftaran anda gagal, silahkan periksa kembali data yang anda masukkan</h3>";
		echo "<h3><br><a href='index.html'>Kembali</a><br></h3>";
	}
		
} else {
	echo "<h3>Foto yang anda upload melebihi ukuran maksimal</h3>";
	echo "<h3><br><a href='index.html'>Kembali</a><br></h3>";
}


?>