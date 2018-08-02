<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $qe = mysqli_query($koneksi,"SELECT * FROM pengumuman WHERE id_pgmn='$id'");
    $data = mysqli_fetch_array($qe);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Selamat Datang</title>
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
                        <a class="active-menu"  href="beranda_guru.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
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
                        <a  href="soal.php"><i class="fa fa-edit fa-3x"></i>Tugas dan Ujian</a>
                    </li> 
                    <li>
                        <a  href="nilai.php"><i class="fa fa-edit fa-3x"></i>Nilai</a>
                    </li>		
                </ul>
               
            </div>
            
        </nav>  
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
<!--========================= name ==============================================-->
                     <h2> Silahkan Masukan Pengumuman</h2>  
<!--========================= name ==============================================--> 
                    </div>
                </div>   
 <!-- ============================ Garis =============================  -->
                 <hr />
                <div class="row"></div>
                <div class="col-md-3 col-sm-6 col-xs-6"> </div>
 <!-- ============================ Garis =============================  -->           
     
<!-- ============================ Mulai Konten =============================  -->      
 

<?php
    if (isset($_POST['edit'])) {
        $id = $_POST ['id'];
        $judul = $_POST['judul'];
        $isi = $_POST['isi'];
        $tgl = date("Y-m-d H:i:s");
        $tambah = mysqli_query($koneksi,"UPDATE pengumuman SET judul='$judul',isi='$isi',tgl='$tgl' WHERE id_pgmn='$id'");
        if ($tambah){
            echo "berhasil";
        }else{
            echo "gagal";
        }
    } 
 ?>   

<div class="panel panel-default">
    <div class="panel-heading">Pengumuman</div>
        <div class="panel-body">
            <div class="row">
                <div class="col-md-6">
                    <form method="post" role="form">
                         <div class="form-group">
                            <label>Judul</label>
                            <input name="judul" value="<?php echo $data['judul'];?>" class="form-control" />
                            <input type="hidden" name="id" value="<?php echo $data['id_pgmn'];?>" />
                        </div>
                        <div class="form-group">
                            <label>Isi</label>
                             <input name="isi" value="<?php echo $data['isi'];?>" class="form-control"></input> 
                        <div class="form-group"></div>
                        <button  class="btn btn-primary" name="edit"> Edit Postingan</button>
                        <a class="btn btn-primary" href="pengumuman.php" onclick="return confirm('Apakah anda ingin kembali ?')">Kembali</a>
                </div>
            </div>
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
    