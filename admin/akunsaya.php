<!DOCTYPE html>
<!-- 
Template Name: BRILLIANT Bootstrap Admin Template
Version: 4.5.6
Author: WebThemez
Website: http://www.webthemez.com/ 
-->
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <?php
        //include '../koneksi.php';
        session_start();
        $cek=$_SESSION['nama'];
        $uname=$_GET['uname'];
        if (!isset($_SESSION['login'])) {
          header("location:../index.html");
        }
        //$sql = mysqli_query($koneksi,"select * from admin where uname='$uname'") or die(mysql_error());
        //$query = mysqli_fetch_array($sql);
    ?>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <meta content="webthemez" name="author" />
    <title>Admin Panel PPDB</title>
    <!-- Bootstrap Styles-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FontAwesome Styles-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Morris Chart Styles-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
    <!-- Google Fonts-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="assets/js/Lightweight-Chart/cssCharts.css"> 
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="index.php"><strong>PPDB ONLINE</strong></a>
				
            </div>
            <ul class="nav navbar-top-links navbar-right">
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Akun Saya</a>
                        </li>
                        <?php
                            if ($cek=="admin") {
                             echo "<li><a href='logout.php'><i class='fa fa-sign-out fa-fw'></i> Manage Admin</a></li>";   
                            } 
                        ?>
                        <li><a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav>
        <!--/. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="index.php"><i class="fa fa-dashboard"></i> Statistik</a>
                    </li>
                    <li>
                        <a href="table.php"><i class="fa fa-table"></i>Data Pendaftar</a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
		<div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header">
                            Ganti Password
                        </h1>
                         <div class="panel-body">
                             <!--<form action="proedit.php" method="POST">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Nama" required="required" name="nama" value="<?=$query['nama']?>">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Username" required="required" name="username" value="<?=$query['uname']?>" readonly='true'>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password Lama" required="required" name="pass">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" placeholder="Password Baru" required="required" name="passbaru">
                                        </div>
                                        <?php 
                                            $editcheck = $_GET['cek'];
                                            if($editcheck==1){
                                                <label>Password lama yang anda masukkan salah</label>    
                                            }
                                        ?>
                                        <button type="submit" class="btn btn-default">Submit</button>
                                    </form>-->
                            
                        </div>
                    </div>
		
				<footer>
                    <p>Copyright &copy; All Rights Reserved by WebThemez</p>
				
        
				</footer>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
	 
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- Morris Chart Js -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
	
	
	<script src="assets/js/easypiechart.js"></script>
	<script src="assets/js/easypiechart-data.js"></script>
	
	 <script src="assets/js/Lightweight-Chart/jquery.chart.js"></script>
	
    <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>

      
    <!-- Chart Js -->
    <script type="text/javascript" src="assets/js/Chart.min.js"></script>  
    <script type="text/javascript" src="assets/js/chartjs.js"></script> 

</body>

</html>
