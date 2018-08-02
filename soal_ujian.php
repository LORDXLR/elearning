<?php
    include "koneksi.php";

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Soal Ujian</title>
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
                <a class="navbar-brand" href="beranda_admin.php">Beranda Siswa</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"> Last access : 30 May 2014 &nbsp; <a href="logout_siswa.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
        </nav>   
           <!-- /. NAV TOP  -->
                <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
				<li class="text-center">
                    <img src="assets/img/find_user.png" class="user-image img-responsive"/>
					</li>
                    <li>
                        <a class="active-menu"  href="beranda_siswa.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                    </li>
                    <li>
                        <a  href="pgmn.php"><i class="fa fa-bar-chart-o fa-3x"></i>Pengumuman</a>
                    </li>
                    <li>
                        <a  href="user_siswa.php"><i class="fa fa-bar-chart-o fa-3x"></i>Data User</a>
                    </li>
                    <li  >
                        <a  href="dlmateri.php"><i class="fa fa-table fa-3x"></i>Materi</a>
                    </li>
                    <li>
                            <a  href="soal.php"><i class="fa fa-edit fa-3x"></i>Soal<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                <li>
                                    <a href="soal_tugas.php">Soal Tugas</span></a>
                                </li>
                                <li>
                                    <a href="soal_ujian.php">Soal Ujian</span></a>
                                </li>
                            </ul>
                        </li>
                    <li>
                        <a href="lihat_nilai.php"><i class="fa fa-bar-chart-o fa-3x"></i>Nilai</a>
                    </li>	
             	</ul>
            </div>
        </nav>  
<!--=========================== header  ========================================-->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Soal Ujian</h2>   
                        <h5>Pilih Mata Pelajaran yang akan dikerjakan</h5>
                    </div>
                </div>    
<!--=========================== header  ========================================-->          
<!--=========================== garis  ========================================-->
 <hr />
                <div class="row"></div>
                <div class="col-md-3 col-sm-6 col-xs-6"> </div>
<!--=========================== garis  ========================================-->
<!--=========================== mulai konten  ========================================-->

<tr>
    <a href="ubi.php" class="btn btn-primary btn-lg">Bahasa Indonesia</a>
    <a href="ubig.php" class="btn btn-danger btn-lg">Bahasa Inggris</a>
    <a href="umat.php" class="btn btn-success btn-lg">Matematika</a>
    <a href="upa.php" class="btn btn-info btn-lg">IPA</a>
</tr>

<!--=========================== akhir konten  ========================================-->
    </div>
</div>

<script src="assets/js/jquery-1.10.2.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.metisMenu.js"></script>
<script src="assets/js/morris/raphael-2.1.0.min.js"></script>
<script src="assets/js/morris/morris.js"></script>
<script src="assets/js/custom.js"></script>
    
   
</body>
</html>