<?php
    include "koneksi.php";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>List Guru</title>
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
                        <h5></h5>
                    </div>
                </div> 
<!-- ============================ Garis =============================  -->
                 <hr />
                <div class="row"></div>
                <div class="col-md-3 col-sm-6 col-xs-6"> </div>
<!-- ============================ Garis =============================  -->

<!--============================= Mulai Konten ========================-->
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Tabel Data Guru
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <a class="btn btn-primary " href="data_guru.php">Tambah Data</a>
                                        </tr>
                                        <tr>
                                            <th>No</th>
                                            <th>ID</th>
                                            <th>Nama Guru</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>tgl Lahir</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Alamat</th>
                                            <th>email</th>
                                            <th>Bidang Studi</th>
                                            <th>Aksi</th>
                                        </tr>
                                        <?php
                                        $no = 1;
                                        $qry = mysqli_query($koneksi,"SELECT * FROM guru");
                                        while($data=mysqli_fetch_array($qry)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['id_guru'];?></td>
                                            <td><?php echo $data['nama'];?></td>
                                            <td><?php echo $data['username'];?></td>
                                            <td><?php echo $data['password'];?></td>
                                            <td><?php echo $data['tgl_lahir'];?></td>
                                            <td><?php echo $data['jenis_kelamin'];?></td>
                                            <td><?php echo $data['alamat'];?></td>
                                            <td><?php echo $data['email'];?></td>
                                            <td><?php echo $data['bdng_studi'];?></td>
                                            <td>
                                                <div class="form-group"></div>
                                                <a class="btn btn-primary " href="edit_guru.php?id=<?php echo $data['id_guru'];?>">Edit</a>
                                                
                                                <div class="form-group"></div>
                                                <a class="btn btn-primary " onclick="return confirm('Anda Yakin ?')" href="hapus_guru.php?id=<?php echo $data['id_guru']; ?>">Hapus</a>
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
