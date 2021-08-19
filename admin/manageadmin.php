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
    $cek = $_SESSION['nama'];
    if (!isset($_SESSION['login'])) {
      header("location:../index.html");
    }
    if(!isset($_SESSION['nama'])){
        header("location:index.php");
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
   
        <!-- Custom Styles-->
    <link href="assets/css/custom-styles.css" rel="stylesheet" />
     <!-- Google Fonts-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
     <!-- TABLE STYLES-->
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
</head>
<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php"><strong> PPDB Online</strong></a>
				<div id="sideNav" href="">
		</div>
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
                        <a href="index.php"><i class="fa fa-dashboard"></i> Statistik</a>
                    </li>
                    <li>
                        <a href="table.php"><i class="fa fa-table"></i> Data Pendaftar</a>
                    </li>
                    <li>
                        <a href="logout.php"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    </li>
                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
		  <div class="header"> 
                        <h1 class="page-header">
                            Data Admin
                        </h1>
        <script type="text/javascript">
            $(document).ready(function() {
                $('#dataTables-example').DataTable();
            } );
        </script>
									
		</div>
		
            <div id="page-inner"> 
               
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Data Admin
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No.</th>
                                            <th><p style="margin-right: 30mm">Nama</p></th>
                                            <th><p style="margin-right: 10mm">NIP</p></th>
                                            <th style="text-align: center; width: 30%"><p style="margin-right: 50mm">Aksi</p></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                          include'../koneksi.php';
                                          $sql = mysqli_query($koneksi,"select * from admin where not uname='196906211994121002'") or die(mysql_error());
                                          $i=1;
                                          while ($query = mysqli_fetch_array($sql))  {
                                          ?>
                                          <tr>
                                            <td> <?php echo $i;$i++ ?></td>
                                            <td> <?php echo $query['nama']; ?></td>
                                            <td> <?php echo $query['uname']; ?></td>
                                            <td style="text-align: center;"><a href="deleteadmin.php?id=<?=$query['uname']?>" class="btn btn-primary">Delete</a> </td>
                                          </tr>
                                          <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                        <center>
                            <a href="tambahadmin.php" class="btn btn-primary">Tambah Admin</a>
                        </center>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
                <!-- /. ROW  -->
            <div class="row">
                
                <!-- /. ROW  -->
        </div>
               <footer><p>Copyright &copy; All Rights Reserved by WebThemez</p></footer>
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
     <!-- /. WRAPPER  -->
    <!-- JS Scripts-->
    <!-- jQuery Js -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- Bootstrap Js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Metis Menu Js -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- DATA TABLE SCRIPTS -->
    <script src="assets/js/dataTables/jquery.dataTables.js"></script>
    <script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready(function () {
                $('#dataTables-example').dataTable();
            });
    </script>
         <!-- Custom Js -->
    <script src="assets/js/custom-scripts.js"></script>
    
   
</body>
</html>
