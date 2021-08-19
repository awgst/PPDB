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
    session_start();
    $cek=$_SESSION['nama'];
    $uname=$_SESSION['uname'];
    if (!isset($_SESSION['login'])) {
      header("location:../index.html");
    }
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
                        <li><a href="akunku.php?"><i class="fa fa-sign-out fa-fw"></i> Akun Saya</a>
                        </li>
                        <?php
                            if ($cek=="admin") {
                             echo "<li><a href='manageadmin.php'><i class='fa fa-sign-out fa-fw'></i> Manage Admin</a></li>";   
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
        <script>
            var refreshId = setInterval(function()
            {
            $(‘#show’).load(‘index.php’);
            }, 1000);   
        </script>
		<div id="page-wrapper">
		  <div class="header"> 
                        <h1 class="page-header">
                            Data Statistik
                        </h1>
                         <?php
                                          include'../koneksi.php';
                                          $datenya=date("d/m/Y");
                                          $siswa=0;
                                          $laki=0;
                                          $wamen=0;
                                          $sql = mysqli_query($koneksi,"select * from siswa") or die(mysql_error());
                                          while ($query = mysqli_fetch_array($sql))  {
                                            $siswa++;
                                          }
                                          $sql1 = mysqli_query($koneksi,"SELECT * FROM `siswa` WHERE jk = 'Laki-laki'") or die(mysql_error());
                                          while ($query = mysqli_fetch_array($sql1))  {
                                            $laki++;
                                          }
                                          $sql2 = mysqli_query($koneksi,"SELECT * FROM `siswa` WHERE jk = 'Perempuan'") or die(mysql_error());
                                          while ($query = mysqli_fetch_array($sql2))  {
                                            $wamen++;
                                          }
                                          $totalnya=$siswa - 1;
                                          $lakik = $laki;
                                          $whamen = $wamen;
                                          $lakinya = ($lakik/$totalnya) * 100;
                                          $wamennya = ($whamen/$totalnya) * 100;
                                          $tampillaki = number_format($lakinya,1);
                                          $tampilwamen = number_format($wamennya,1);              

                        ?>
									
		</div>
            <div id="page-inner">

                <!-- /. ROW  -->
	           <script type="text/javascript">
               </script>
                <div class="row">
                    <div class="col-md-3 col-sm-12 col-xs-12">
					<div class="board"  >
                        <div class="panel panel-primary">
						<div class="number">
							<h3>
								<h3  id="show"><?=$totalnya?></h3>
								<small>Total</small>
							</h3> 
						</div>
						<div class="icon">
						   <i class="fa fa-user fa-5x red"></i>
						</div>
		 
                        </div>
						</div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="board">
                        <div class="panel panel-primary">
                        <div class="number">
                            <h3>
                                <h3 id="show"><?=$lakik?></h3>
                                <small>Laki-laki</small>
                            </h3> 
                        </div>
                        <div class="icon">
                           <i class="fa fa-user fa-5x red"></i>
                        </div>
         
                        </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="board">
                        <div class="panel panel-primary">
                        <div class="number">
                            <h3>
                                <h3 id="show"><?=$whamen?></h3>
                                <small>Perempuan</small>
                            </h3> 
                        </div>
                        <div class="icon">
                           <i class="fa fa-user fa-5x red"></i>
                        </div>
         
                        </div>
                        </div>
                    </div>
                    
     
                    
				   
                </div>
				<div class="row">
                      <div class="col-xs-6 col-md-3">
                        <div class="panel panel-default">
                          <div class="panel-body easypiechart-panel">
                            <h4>Laki-laki</h4>
                            <div class="easypiechart" id="easypiechart-blue" data-percent="<?=$tampillaki?>" ><span class="percent"><?=$tampillaki?>%</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col-xs-6 col-md-3">
                        <div class="panel panel-default">
                          <div class="panel-body easypiechart-panel">
                            <h4>Perempuan</h4>
                            <div class="easypiechart" id="easypiechart-orange" data-percent="<?=$tampilwamen?>" ><span class="percent"><?=$tampilwamen?>%</span>
                            </div>
                          </div>
                        </div>
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

<!--                <div class="col-md-3 col-sm-12 col-xs-12">
                    <div class="board">
                        <div class="panel panel-primary">
                        <div class="number">
                            <h3>
                                <h3><?=$turis?></h3>
                                <small>Turis</small>
                            </h3> 
                        </div>
                        <div class="icon">
                           <i class="fa fa-eye fa-5x red"></i>
                        </div>
         
                        </div>
                        </div>
                    </div>
    

          
           -->