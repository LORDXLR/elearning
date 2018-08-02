<?php
    include "koneksi.php";

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Edit Siswa</title>
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
font-size: 16px;">Selamat Datang siswa<a href="logout_siswa.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
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
                     <h2>Edit Data Anda</h2>   
                        <h5></h5>
                    </div>
                </div>    
<!--=========================== header  ========================================-->          
<!--=========================== garis  ========================================-->
 <hr />
                <div class="row"></div>
                <div class="col-md-3 col-sm-6 col-xs-6"> </div>
<!--=========================== garis  ========================================-->
<!--=========================== mulai konten  ========================================-->

<div class="panel panel-default">
    <div class="panel-heading">  </div>
        <div class="panel-body">
            <div class="table-responsive">
              
               <div class="form-group input-group">
            <label>Nama</label>
            <input type="text" name="username" class="form-control" placeholder="siswa"/>
            </div>
            <div class="form-group input-group">
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="siswa"/>
            </div>
            <div class="form-group input-group">
            <label>Password</label>
            <input type="text" name="username" class="form-control" placeholder="siswa"/>
            </div>
            <div class="form-group input-group">
            <label>Tanggal Lahir</label>
            <input type="text" name="username" class="form-control" placeholder="12-12-1912"/>
            </div>
            <div class="form-group input-group">
            <div class="form-group">
                <label>Jenis Kelamin</label>
                    <select name="jk" class="form-control">
                        <option>L</option>
                        <option>P</option>
                    </select>
            </div>
            <div class="form-group input-group">
            <label>Alamat</label>
            <input type="text" name="username" class="form-control" placeholder="bojong saru"/>
            </div>
            <div class="form-group input-group">
            <label>Email</label>
            <input type="text" name="username" class="form-control" placeholder="Julie@gmail.com"/>
            <div class="form-group">
                <label>Kelas</label>
                    <select name="bs" class="form-control">
                    <option>5A</option>
                    <option>5B</option>
                    <option>6A</option>
                    <option>6B</option>
                </select>
            </div>
            <a class="btn btn-primary" href="#">Edit</a>
            <a class="btn btn-primary" href="beranda_siswa.php">Kembali</a>
             
            </div>
        </div>
    </div> 

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
