<?php
include '../koneksi.php';
$id = $_GET['id'];
$query = mysqli_query($koneksi,"delete from admin where uname = '$id'") or die(mysqli_error($koneksi));
if($query)
{
    header("Location:manageadmin.php");
}

?>