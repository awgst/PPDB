<?php
// memanggil library FPDF
require('../fpdf.php');

$nisn = $_GET['id'];
include '../koneksi.php'; 
$sql = mysqli_query($koneksi,"select * from siswa where nisn='$nisn'") or die(mysql_error());
$data=mysqli_fetch_array($sql);

$regis = $data['regist'];
$nama = $data['nama'];
$nisn = $data['nisn'];
$asal = $data['asal'];
$alamat = $data['alamat'];
$ttl = $data['tempat'].", ".$data['tanggal'];
$jk = $data['jk'];
$agama = $data['agama'];
$namawali = $data['namawali'];
$alamatwali = $data['alamatwali'];
$jarak = $data['jarak'];
$foto = $data['file'];

// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF();
// membuat halaman baru
$pdf->AddPage();

$pdf->Image('../image/header.PNG',10,10);

$pdf->SetY(55);
$pdf->SetX(35);
$pdf->SetFont('Arial','',11);
$pdf->Cell(35,10,'Nomor Registrasi');
$pdf->Cell(10,10,':',0,0,'R');
$pdf->Cell(65,10,$regis,1,1,'L');
$pdf->SetX(35);
$pdf->Cell(35,10,'NAMA');
$pdf->Cell(10,10,':',0,0,'R');
$pdf->Cell(100,10,$nama,0,1,'L');
$pdf->SetX(35);
$pdf->Cell(35,10,'NISN');
$pdf->Cell(10,10,':',0,0,'R');
$pdf->Cell(100,10,$nisn,0,1,'L');
$pdf->SetX(35);
$pdf->Cell(35,10,'Sekolah Asal');
$pdf->Cell(10,10,':',0,0,'R');
$pdf->Cell(100,10,$asal,0,1,'L');
$pdf->SetX(35);
$pdf->Cell(35,10,'Tempat, Tanggal Lahir');
$pdf->Cell(10,10,':',0,0,'R');
$pdf->Cell(100,10,$ttl,0,1,'L');
$pdf->SetX(35);
$pdf->Cell(35,10,'Jenis Kelamin');
$pdf->Cell(10,10,':',0,0,'R');
$pdf->Cell(100,10,$jk,0,1,'L');
$pdf->SetX(35);
$pdf->Cell(35,10,'Agama');
$pdf->Cell(10,10,':',0,0,'R');
$pdf->Cell(100,10,$agama,0,1,'L');
$pdf->SetX(35);
$pdf->Cell(35,10,'Alamat');
$pdf->Cell(10,10,':',0,0,'R');
$pdf->MultiCell(100,10,$alamat,0,'L',0);
$pdf->SetX(35);
$pdf->Cell(35,10,'Nama Orang Tua/Wali');
$pdf->Cell(10,10,':',0,0,'R');
$pdf->Cell(100,10,$namawali,0,1,'L');
$pdf->SetX(35);
$pdf->Cell(35,10,'Alamat Orang Tua/Wali');
$pdf->Cell(10,10,':',0,0,'R');
$pdf->MultiCell(100,10,$alamatwali,0,'L',0);
$pdf->SetX(35);
$pdf->Cell(35,10,'Jarak dari rumah');
$pdf->Cell(10,10,':',0,0,'R');
$pdf->Cell(100,10,$jarak." KM",0,1,'L');
$pdf->SetX(35);
$pdf->Cell(35,10,'ke SMP Negeri 1 Gabus');
$pdf->SetX(35);
$pdf->SetY(225);
$pdf->SetFont('Arial','',11);
$path = '../images/'.$foto;
$pdf->Image($path,40,175,35,45);

$pdf->Cell(95,10,'Calon Peserta',0,0,'C');
$pdf->Cell(95,10,'Panitia',0,1,'C');
$pdf->Cell(95,30,'',0,0,'C');
$pdf->Cell(95,30,'',0,1,'C');
$pdf->Cell(95,10,$nama,0,0,'C');
$pdf->Cell(95,10,'..................',0,1,'C');
$pdf->Output();
?>