<?php
    include "koneksi.php";

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Materi Pelajaran</title>
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
                <a class="navbar-brand" href="beranda_siswa.php">Beranda Siswa</a> 
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
                     <h2>Materi</h2>   
                        <h5>Pilih Materi Mata Pelajaran Yang Ingin Diunduh</h5>
                    </div>
                </div>    
<!--=========================== header  ========================================-->          
<!--=========================== garis  ========================================-->
                <hr />
                <div class="row"></div>
                <div class="col-md-3 col-sm-6 col-xs-6"> </div>
<!--=========================== garis  ========================================-->
<!--=========================== mulai konten  ========================================-->
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             List Materi Pelajaran
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <tr>
                                        <a class="btn btn-primary " href="dlmateri.php">Bahasa Indonesia</a>
                                        <a class="btn btn-warning " href="materibig.php">Bahasa Inggris</a>
                                        <a class="btn btn-success " href="materima.php">Matematika</a>
                                        <a class="btn btn-info " href="materiip.php">IPA</a>
                                    </tr>
                                        <tr>
                                            <th>No</th>
                                            <th>ID_Materi</th>
                                            <th>Judul</th>
                                            <th>Nama Materi</th>
                                            <th>Mata Pelajaran</th>
                                            <th>File</th>
                                            <th>Aksi</th>
                                        </tr>
                                        <?php
                                        $no = 1;
                                        $qry = mysqli_query($koneksi,"SELECT * FROM materi WHERE mapel IN ('IPA')");
                                        while($data=mysqli_fetch_array($qry)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['id_materi'];?></td>
                                            <td><?php echo $data['judul_materi'];?></td>
                                            <td><?php echo $data['nama_materi'];?></td>
                                            <td><?php echo $data['mapel'];?></td>
                                            <td><?php echo $data['file_materi'];?></td>
                                            <td>
                <a class="btn btn-primary " onclick="return confirm('Ingin Mendownload ?')" >Download</a>
                                            </td>
                                        </tr>    
                                        <?php } ?>
                                    </thead>
                                    <tbody>
                                      
                                    </tbody>
                                </table>
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
