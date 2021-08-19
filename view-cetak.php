<!DOCTYPE html>
<html lang="en">

<head>

    <?php
        $nisn = $_POST['nisn'];
        include 'koneksi.php'; 
        $sql = mysqli_query($koneksi,"select * from siswa where nisn='$nisn'") or die(mysql_error());
        $jumlah = mysqli_num_rows($sql);
        if($jumlah>0){
            $data=mysqli_fetch_array($sql);  
            $wkwk=$data['nama'];
            $nis=$data['nisn'];
            $hasData=1;
        }
        else{
            $hasData=0;
        }
        
    ?>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>PPDB Online</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Vendor CSS-->
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/datepicker/daterangepicker.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body onload="disableSubmit()">
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">PPDB Online SMP Negeri 1 Gabus 2020</h2>
                </div>
                <div class="card-body">
                    <form method="POST" action="procetak.php">
                    <input type="hidden" value=<?=$nis?> name="nisn">
                        <h3>Selamat datang di PPDB Online SMP N 1 Gabus</h3><br>
                        <?php
                            if ($hasData == 1) {
                                echo "<h4>Hai, ".$wkwk."</h4><br>";
                                echo "<p>Silahkan download file bukti pendaftaran anda di bawah ini</p>";
                                echo '<button class="btn btn--radius-2 btn--red" type="submit" id="submit">Download</button>';
                                echo "<br><br><a href='index.html' class='btn btn--radius-2 btn--red'>Kembali</a>";        
                        
                            } else {
                                echo "Anda belum terdaftar, silahkan untuk mendaftar terlebih dahulu.";
                                echo "<br><br><a href='index.html' class='btn btn--radius-2 btn--red' >Kembali</a>";
                            }
                            
                        ?>
                        
                        
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <!-- Vendor JS-->
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/datepicker/moment.min.js"></script>
    <script src="vendor/datepicker/daterangepicker.js"></script>

    <!-- Main JS-->
    <script src="js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->