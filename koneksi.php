<?php

$hostname="sql309.epizy.com";
$username="epiz_25707356";
$password="bB54duoYh1h6Dvt";
$db="epiz_25707356_ppdb";

$koneksi=new mysqli($hostname,$username,$password);

    if($koneksi)
    {
        mysqli_select_db($koneksi,$db);
    }
    else{
        echo "Error";
    }

?>