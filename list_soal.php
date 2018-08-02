<?php
    include "koneksi.php";
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Soal Tugas kelas 6</title>
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
                <a class="navbar-brand" href="beranda_guru.php">Beranda Guru</a> 
            </div>
  <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 16px;"><a href="logout_guru.php" class="btn btn-danger square-btn-adjust">Logout</a> </div>
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
                        <a  href="user_guru.php"><i class="fa fa-bar-chart-o fa-3x"></i>Data User</a>
                    </li>
					<li>
                        <a   href="Pengumuman.php"><i class="fa fa-bar-chart-o fa-3x"></i>Pengumuman</a>
                    </li>	
                    <li>
                        <a  href="materi.php"><i class="fa fa-edit fa-3x"></i>Materi</a>
                    </li> 

<li>
    <a  href="soal.php"><i class="fa fa-edit fa-3x"></i>Tugas dan Ujian<span class="fa arrow"></span></a>
        <ul class="nav nav-second-level">
        <li>
            <a>Input Soal Tugas<span class="fa arrow"></span></a>
            <ul class="nav nav-third-level">
                <li>
                    <a href="tkelas5.php">Kelas 5</a>
                </li>
                <li>
                    <a href="tkelas6.php">Kelas 6</a>
                </li>
            </ul>
        </li>
        <li>
            <a>Input Soal ujian<span class="fa arrow"></span></a>
            <ul class="nav nav-third-level">
                <li>
                    <a href="ukelas5.php">Kelas 5</a>
                </li>
                <li>
                    <a href="ukelas6.php">Kelas 6</a>
                </li>
            </ul>
        </li>
        </ul>
        </li>
        </li> 
        <li>
            <a><i class="fa fa-square-o fa-3x"></i> Nilai Siswa <span class="fa arrow"></span></a>
            <ul class="nav nav-second-level">
            <li>
                <a>Nilai Tugas<span class="fa arrow"></span></a>
                <ul class="nav nav-third-level">
                </li>
                <li>
                <li>
                    <a href="ntkelas5a.php">Kelas 5A</a>
                </li>
                <li>
                    <a href="ntkelas5b.php">Kelas 5B</a>
                </li>
                <li>
                    <a href="ntkelas6a.php">Kelas 6A</a>
                </li>
                <li>
                    <a href="ntkelas6b.php">Kelas 6B</a>
                </li>
                </ul>
                <li>
                    <a>Nilai Ujian<span class="fa arrow"></span></a>
                    <ul class="nav nav-third-level">
                    </li>
                    <li>
                    <li>
                        <a href="nukelas5a.php">Kelas 5A</a>
                    </li>
                    <li>
                        <a href="nukelas5b.php">Kelas 5B</a>
                    </li>
                    <li>
                        <a href="nukelas6a.php">Kelas 6A</a>
                    </li>
                    <li>
                        <a href="nukelas6b.php">Kelas 6B</a>
                    </li>
                    </ul>

                </ul>
               
            </div>
            
         </nav>  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
<!--========================= name ==============================================-->
                     <h2>Input Soal Tugas kelas 6</h2>  
<!--========================= name ==============================================--> 
                    </div>
                </div>   
 <!-- ============================ Garis =============================  -->
                 <hr />
                <div class="row"></div>
                <div class="col-md-3 col-sm-6 col-xs-6"> </div>
 <!-- ============================ Garis =============================  -->           
     
<!-- ============================ Mulai Konten =============================  --> 
<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             List Soal Tugas Kelas 5
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                    <a class="btn btn-primary " href="tkelas5.php">Buat soal</a>
                                        <tr>
                                            <th>No</th>
                                            <th>ID</th>
                                            <th>Judul</th>
                                            <th>Mata Pelajaran</th>
                                            <th>materi</th>
                                            <th>kelas</th>
                                            <th>Tanggal</th>
                                            <th>Soal</th>
                                            <th>Jawaban A</th>
                                            <th>Jawaban B</th>
                                            <th>Jawaban C</th>
                                            <th>Jawaban D</th>
                                            <th>Kunci Jawaban</th>
                                            <th>Opsi</th>

                                        </tr>
                                        <?php
                                        $no = 1;
                                        $qry = mysqli_query($koneksi,"SELECT * FROM tugas");
                                        while($data=mysqli_fetch_array($qry)) {
                                        ?>
                                        <tr>
                                            <td><?php echo $no++; ?></td>
                                            <td><?php echo $data['id_tugas'];?></td>
                                            <td><?php echo $data['judul'];?></td>
                                            <td><?php echo $data['mapel'];?></td>
                                            <td><?php echo $data['materi'];?></td>
                                            <td><?php echo $data['kelas'];?></td>
                                            <td><?php echo $data['tgl'];?></td>
                                            <td><?php echo $data['soal_tugas'];?></td>
                                            <td><?php echo $data['jawa'];?></td>
                                            <td><?php echo $data['jawb'];?></td>
                                            <td><?php echo $data['jawc'];?></td>
                                            <td><?php echo $data['jawd'];?></td>
                                            <td><?php echo $data['kunci_j'];?></td>
                        
                                            <td>
                                                <div class="form-group"></div>
                                                <a class="btn btn-primary " href="edit_tugas5.php?id=<?php echo $data['id_tugas'];?>">Edit</a>
                                                
                                                <div class="form-group"></div>
                                                <a class="btn btn-primary " onclick="return confirm('Anda Yakin ?')" href="hapus_tugas.php?id=<?php echo $data['id_tugas']; ?>">Hapus</a>
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

   
<!-- ============================ akhir Konten =============================  -->  

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
