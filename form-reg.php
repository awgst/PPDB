<?php 
    include 'koneksi.php'; 
    $sql = mysqli_query($koneksi,"select id from siswa order by id desc limit 1") or die(mysql_error());
    $data=mysqli_fetch_array($sql);  
    $wkwk=(int)$data['id']+1;
    $regis="00".$wkwk."/PPDB/SMP1GABUS/2020";
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

<body onload="disableSubmit()">
    <div class="page-wrapper bg-gra-03 p-t-45 p-b-50">
        <div class="wrapper wrapper--w790">
            <div class="card card-5">
                <div class="card-heading">
                    <h2 class="title">Formulir Pendaftaran PPDB Online 2020</h2>
                </div>
                <div class="card-body">
                    <p>Isilah form pendaftaran berikut dengan lengkap dan benar, pastikan anda mengisi semua data dengan benar. Setelah anda mengklik tombol daftar dibawah maka data sudah tidak dapat dirubah.</p>
                    <br>
                    <form method="POST" enctype="multipart/form-data" action="proses_input_form.php">
                        <input type="hidden" value=<?=$wkwk?> name="id">
                        <div class="form-row">
                            <div class="name">Nomor Registrasi</div>
                            <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="regist" readonly value=<?=$regis?>>
                                    </div>
                            </div>
                        </div>
                        <!-- nama section-->
                        <div class="form-row">
                            <div class="name">Nama Lengkap</div>
                            <div class="value">
                                    <div class="input-group">
                                        <input class="input--style-5" type="text" name="nama" required="required">
                                    </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">NISN</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="nisn" required="required">
                                </div>
                            </div>
                        </div>

                        <div class="form-row">
                            <div class="name">Sekolah Asal</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="asal" required="required">
                                </div>
                            </div>
                        </div>

                        <div class="form-row m-b-55">
                            <div class="name">Tempat / Tgl Lahir</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="text" name="tempat" required="required">
                                            <label class="label--desc">Tempat Lahir</label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                            <input class="input--style-5 js-datepicker" type="text" name="tgl" id="tgl" required="required">
                                            <label class="label--desc">Tanggal Lahir</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="form-row m-b-55">
                            <div class="name">Jenis Kelamin</div>
                            <div class="value">
                                <div class="row row-space">
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <label class="radio-container m-r-55">Laki-laki
                                                <input type="radio" name="jk" checked="true" value="Laki-laki">
                                                <span class="checkmark"></span>
                                            </label>
                                            
                                        </div>
                                    </div>
                                    <div class="col-2">
                                        <div class="input-group-desc">
                                            <label class="radio-container">Perempuan
                                                <input type="radio" name="jk" value="Perempuan">
                                                <span class="checkmark"></span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        

                        
                        
                        <div class="form-row">
                            <div class="name">Agama</div>
                            <div class="value">
                                <div class="input-group">
                                    <div class="rs-select2 js-select-simple select--no-search">
                                        <select name="agama" required="required">
                                            <option disabled="disabled" selected="selected">Pilih</option>
                                            <option>Islam</option>
                                            <option>Kristen</option>
                                            <option>Katholik</option>
                                            <option>Hindu</option>
                                            <option>Budha</option>
                                            <option>Kong Hu Cu</option>
                                        </select>
                                        <div class="select-dropdown"></div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Alamat -->
                        <div class="form-row">
                            <div class="name">Alamat</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-5" name="alamat" required="required"></textarea>
                                </div>
                            </div>
                        </div>   
                        <!-- </Alamat> -->

                        <div class="form-row">
                            <div class="name">Nama Orang  Tua / Wali</div>
                            <div class="value">
                                <div class="input-group">
                                    <input class="input--style-5" type="text" name="namawali" required="required">
                                </div>
                            </div>
                        </div>    

                        <div class="form-row">
                            <div class="name">Alamat Orang Tua / Wali</div>
                            <div class="value">
                                <div class="input-group">
                                    <textarea class="textarea--style-5" name="alamatwali" required="required" ></textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-row m-b-55">
                            <div class="name">Jarak rumah dari SMP Negeri 1 Gabus</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-9">
                                        <div class="input-group-desc">
                                            <input class="input--style-5" type="number" name="jarak" required="required" step=any>
                                            <label class="label--desc">Gunakan . untuk menuliskan koma</label>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <div class="input-group-desc">
                                        <input class="input--style-5" type="text" disabled="true" value="KM">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-row m-b-55">
                            <div class="name">Upload Foto</div>
                            <div class="value">
                                <div class="row row-refine">
                                    <div class="col-9">
                                        <div class="input-group js-input-file">
                                            <input class="input-file" type="file" name="file" id="file" accept="image/*" required="required">
                                            <div class="label--desc">Upload foto anda. Max 3 MB</div>
                                        </div>
                                    </div>
                                    <div class="col-3">
                                        <img id="box" style="width: 100%;height: 100%"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <script>
                            inputBox = document.getElementById("file"); // Mengambil elemen tempat Input gambar
                            inputBox.addEventListener('change',function(input){ // Jika tempat Input Gambar berubah
                                var box = document.getElementById("box"); // mengambil elemen box
                                var img = input.target.files; // mengambil gambar

                                var reader = new FileReader(); // memanggil pembaca file/gambar
                                reader.onload = function(e){ // ketika sudah ada
                                    box.setAttribute('src',e.target.result); // membuat alamat gambar
                                }
                                reader.readAsDataURL(img[0]); // menampilkan gambar
                            }
                            );
                        </script>
                        <script>
                            function disableSubmit() {
                                document.getElementById("submit").disabled = true;
                            }
                       
                            function activateButton(element) {
                       
                                if(element.checked) {
                                    document.getElementById("submit").disabled = false;
                                    document.getElementById("submit").class = "btn btn--radius-2 btn--red";
                                }
                                else  {
                                    document.getElementById("submit").disabled = true;
                                    document.getElementById("submit").class = "btn btn--radius-2 btn--reddis";
                                }
                       
                             }
                        </script>
                        
                        <div class="form-row">
                            <div class="name">
                                <input type="checkbox" name="terms" id="terms"  onchange="activateButton(this)"> 
                            </div>
                            <div class="value">
                                 Saya mengisi data tersebut dengan sebenar-benarnya. Apabila dikemudian hari ditemukan ketidaksesuaian dengan data yang saya masukkan, saya bersedia menerima konsekuensi akan hal tersebut.
                            </div>
                        </div>
                        
        

                        <div>
                            <button class="btn btn--radius-2 btn--red" type="submit" id="submit">Daftar</button>
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