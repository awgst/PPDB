<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

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


    <!-- Bootstrap -->
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="style.css">
    <link href="assets/js/dataTables/dataTables.bootstrap.css" rel="stylesheet" />

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">PPDB Online SMP Negeri 1 Gabus 2020</h2>
                </div>
                <div class="card-body">
                    <form method="POST">
                        <h3>Daftar Calon Peserta Didik Baru</h3>
                        <div class="table-responsive">
                                <table class="table table-hover" id="dataTables-example">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">Nama</th>
                                            <th scope="col">Sekolah Asal</th>
                                            <th scope="col">Jarak ke sekolah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                          include'koneksi.php';
                                          $sql = mysqli_query($koneksi,"select * from siswa where nisn NOT IN ('Test')") or die(mysql_error());
                                          $numb = 1;
                                          while ($query = mysqli_fetch_array($sql))  {
                                          ?>
                                          <tr>
                                            <td> <?php echo $numb; $numb++?> </td>
                                            <td> <?php echo $query['nama']; ?></td>
                                            <td> <?php echo $query['asal']; ?></td>
                                            <td> <?php echo $query['jarak']." KM"; ?></td>
                                          </tr>
                                          <?php } ?>
                                    </tbody>
                                </table>
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