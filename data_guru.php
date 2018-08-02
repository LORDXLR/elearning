<?php
    include "koneksi.php";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Input Guru</title>
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="beranda_admin.php">Beranda Guru</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;">Selamat Datang Admin<a href="logout_admin.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
                    <li>
                        <a class="active-menu"  href="beranda_admin.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    <li>
                        <a  href="berita.php"><i class="fa fa-bar-chart-o fa-3x"></i>Berita</a>
                    </li>
                    <li>
                        <a  href="data_guru.php"><i class="fa fa-edit fa-3x"></i>Input Data Guru</a>
                    </li>
                     <li>
                        <a  href="list_guru.php"><i class="fa fa-table fa-3x"></i>List Data Guru</a>
                    </li>
					<li>
                        <a   href="data_siswa.php"><i class="fa fa-edit fa-3x"></i>Input Data Siswa</a>
                    </li>	
                    <li>
                        <a  href="list_siswa.php"><i class="fa fa-table fa-3x"></i>List Data Siswa</a>
                    </li>
                    <li  >
                        <a  href="kelas.php"><i class="fa fa-edit fa-3x"></i>Kelas</a>
                    </li>	
                     <li>
                        <a  href="mapel.php"><i class="fa fa-edit fa-3x"></i>Mata Pelajaran</a>
                    </li>					
                </ul>
               
            </div>
            
        </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Data Guru</h2>   
                        <h5>Silahkan Masukan Data Guru</h5>
                    </div>
                </div> 
<!-- ============================ Garis =============================  -->
                 <hr />
                <div class="row"></div>
                <div class="col-md-3 col-sm-6 col-xs-6"> </div>
<!-- ============================ Garis =============================  -->

<!--============================= Mulai Konten ========================-->
<?php
    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $password = $_POST['pass'];
        $jenisk = $_POST['jk'];
        $alamat = $_POST['alamat'];
        $tgll = $_POST['tgl'];
        $bidangs = $_POST['bs'];
        $email = $_POST['email'];

        $tambah = mysqli_query($koneksi,"INSERT INTO guru(nama,username,password,jenis_kelamin,alamat,tgl_lahir,bdng_studi,email)VALUES('$nama','$username','$password','$jenisk','$alamat','$tgll','$bidangs','$email')");
        if ($tambah){
            echo "berhasil";
        }else{
            echo "gagal";
        }
    } 
 ?>
<div class="panel panel-default">
                        <div class="panel-heading">
                            Input Data Guru
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form method="post" role="form">
                                        <div class="form-group">
                                            <label>Nama Guru</label>
                                            <input name="nama" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input name="username" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input name="pass" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label>Jenis Kelamin</label>
                                            <select name="jk" class="form-control">
                                                <option>L</option>
                                                <option>P</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <textarea name="alamat" class="form-control" rows="3" placeholder="Masukan alamat"></textarea>
                                        </div>
                                        <div class="form-group">
                                            <label>Tanggal Lahir</label>
                                            <input name="tgl" class="form-control" placeholder="Contoh: tahun-bulan-tanggal" />
                                        </div>
                                        <div class="form-group">
                                            <label>Bidang Studi</label>
                                            <select name="bs" class="form-control">
                                                <option>Bahasa Indonesia</option>
                                                <option>Matematika</option>
                                                <option>Bahasa Inggris</option>
                                                <option>IPA</option>
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label>E-mail</label>
                                            <input name="email" class="form-control" />
                                        </div>
                                       
                                     <div class="form-group"></div>
                                    <button class="btn btn-primary " name="simpan">Simpan</button>

                                       </form>
                                      </div>
                                      </div> 
                                      </div>

<!--============================== Akhir Konten ========================-->
                 
               
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
     <!-- MORRIS CHART SCRIPTS -->
     <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
    <?php
         mysqli_close($koneksi);
         ob_end_flush();
    ?>