<?php
    include "koneksi.php";
    $id = $_GET['id'];
    $qe = mysqli_query($koneksi,"SELECT * FROM materi WHERE id_materi='$id'");
    $data = mysqli_fetch_array($qe);
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
                        <a  href="soal.php"><i class="fa fa-edit fa-3x"></i>Tugas dan Ujian</a>
                    </li> 
                    <li>
                        <a  href="nilai.php"><i class="fa fa-edit fa-3x"></i>Nilai</a>
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
                     <h2>Input Materi Pembelajaran</h2>  
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
    if (isset($_POST['upload'])) {
        $id          = $_POST['id'];
        $judul    = $_POST['judul'];
        $materi    = $_POST['materi'];
        $mapel      = $_POST['mapel'];
        $lokasi_file = $_FILES['ufile']['tmp_name'];
        $nama_file   = $_FILES['ufile ']['name'];
        $folder      = "img/$nama_file";

        if (move_uploaded_file($lokasi_file,"$folder")){
        echo "Nama File : <b>$nama_file</b> sukses di upload";}
     

        $tambah = mysqli_query($koneksi,"UPDATE materi SET id_materi='$id',judul_materi='$judul',nama_materi='$materi',mapel='$mapel',file_materi='$nama_file'");
        if ($tambah){
            echo "berhasil";
        }else{
            echo "gagal";
        }
    } 
 ?>

<div class="panel panel-default">
                        <div class="panel-heading">
                            Upload Materi
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <form enctype="multipart/form-data" method="post" role="form">
                                        <div class="form-group">
                                            <label>Judul Materi </label>
                                            <input name="judul" value="<?php echo $data['judul_materi'];?>" class="form-control" />
                                            <input type="hidden" value="<?php echo $data['id_materi'];?>" name="id" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label>Nama Materi</label>
                                            <input name="materi" value="<?php echo $data['nama_materi'];?>" class="form-control" />
                                        </div>
                                        <div class="form-group">
                                            <label>Mata Pelajaran</label>
                                            <select name="mapel" value="<?php echo $data['mapel'];?>" class="form-control">
                                                <option>Bahasa Indonesia</option>
                                                <option>Matematika</option>
                                                <option>Bahasa Inggris</option>
                                                <option>IPA</option>
                                        </div>
                                        <div class="form-group">
                                        <label>Masukan File Materi</label>
                                        <input type="file" name="ufile" value="<?php echo $data['file_materi'];?>" />
                                        </div>
                                    
                                    <button class="btn btn-primary " name="edit">Edit</button>
                                    <a href="list_materi.php" class="btn btn-primary " name="upload">Kembali</a>


                                       </form>
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
    <?php
         mysqli_close($koneksi);
         ob_end_flush();
    ?>