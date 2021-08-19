<?php 
    include 'koneksi.php'; 
    $sql = mysqli_query($koneksi,"select id from siswa order by id desc limit 1") or die(mysql_error());
    $data=mysqli_fetch_array($sql);  
    $wkwk=(int)$data['id']+1;
    $regis="00".$wkwk."/PPDB/SMP1GABUS/2020";
    session_start();
    if (!empty($_SESSION['login'])) {
      if($_SESSION['nama']!="admin"){
        header("location:index.php");
      }
      else{
        header("location:admin/index.php");
      }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>

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

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Formulir Pendaftaran PPDB Online 2020</h2>
                </div>
                <div class="card-body">
                    <p>Disarankan untuk menggunakan web browser pada komputer personal atau laptop.</p>
                    <br>
                    <form method="POST" enctype="multipart/form-data" action="prologin.php">
                        
                        <div class="form-row">
                            <div class="name">Username</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="uname" required="required" placeholder="Username">
                                    <label class="label--desc">Gunakan NIP sebagai username</label>
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Password</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="password" name="pass" required="required" placeholder="Password">
                                </div>
                            </div>
                        </div>
                        <center>
                            <?php
                                if (isset($_GET['pesan'])) {
                                    if ($_GET['pesan']=="gagal") {
                                        echo "<p>Username atau Password salah</p>";
                                    }
                                }
                            ?>
                        </center>
                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit" id="submit">Login</button>
                        </div>
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