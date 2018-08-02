<?php
    include "koneksi.php";
    session_start();
    if(!isset($_SESSION['username'])){
        header('location:loginadmin.php');
    }
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beranda Admin</title>
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
                <a class="navbar-brand" href="beranda_admin.php">Beranda Admin</a> 
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
                        <a   href="data_siswa.php"><i class="fa fa-edit fa-3x"></i>Data Siswa</a>
                    </li>	
                    <li>
                        <a  href="list_siswa.php"><i class="fa fa-table fa-3x"></i>List Data Siswa</a>
                    </li>
                    <li>
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
<!--========================= name ==============================================-->
                     <h2> Selamat Datang Admin
                     </h2>  
<!--========================= name ==============================================--> 
                    </div>
                </div>   
 <!-- ============================ Garis =============================  -->
                 <hr />
                <div class="row"></div>
                <div class="col-md-3 col-sm-6 col-xs-6"> </div>
 <!-- ============================ Garis =============================  -->           
     
<!-- ============================ Mulai Konten =============================  -->  

<div class="panel panel-default">
    <div class="panel-heading">  </div>
        <div class="panel-body">
            <div class="table-responsive">
              
              <div>
                <div>
                  <a href="berita.php">o Input Berita</a>
                </div>
                <div>
                  <a href="data_guru.php">o Input Data Guru</a>
                </div>
                <div>
                  <a href="list_guru.php">o Lihat Data Guru</a>
                </div>
                <div>
                  <a href="data_siswa.php">o Input Data Siswa</a>
                </div>
                <div>
                  <a href="list_siswa.php">o Lihat Data Siswa</a>
                </div>
                <div>
                  <a href="kelas.php.php">o Kelola Kelas</a>
                </div>
                <div>
                  <a href="mapel.php">o Kelola Mata Pelajaran</a>
                </div>
              </div>
             

            </div>
        </div>
    </div> 
     <div>
                  <a class="btn btn-primary" href="edit_admin.php">Ubah Data Anda</a>
              </div>     
   
<!-- ============================ akhir Konten =============================  -->  
           
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