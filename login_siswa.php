<?php

    ob_start();
    session_start();
    if(!isset($_SESSION['siswa_username'])) header("login_siswa.php");
    include "koneksi.php";

    /* PROSES LOGIN */
        if(isset($_POST['login_now'])) {
           $username = $_POST['username'];
           $password = $_POST['password'];
           $sql_login = mysqli_query($koneksi, "SELECT * FROM siswa WHERE username = '$username' AND password = '$password'");
           if(mysqli_num_rows($sql_login)>0) {
              $row_akun = mysqli_fetch_array($sql_login);
              $_SESSION['siswa_id'] = $row_akun['id'];
              $_SESSION['siswa_username'] = $row_akun['username'];
              header("location: beranda_siswa.php");
           }else {
              header("location: login_siswa.php?login-gagal");
           }
        }
?>
 <!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LOGIN</title>

    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>
<body>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12">
            <br /><br />
                <h2> SELAMAT DATANG</h2>
                <h5>( Silahkan Login Sebagai Siswa)</h5>
                 <br />
            </div>
    <div class="row ">
        <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-10 col-xs-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading"> 
                    <div class="panel-body">        
                            <form method="post" action="" role="form">
                             <?php if(isset($_GET['login-gagal'])) {?>
                                <tr>
                                    <td>
                                        <div>
                                        <p>Maaf, Username / Password yang Anda masukkan Salah</p>
                                        </div>
                                    </td>
                                </tr>
                                <?php }?>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-tag"  ></i></span>
                                    <input type="text" name="username" class="form-control" placeholder="Username"/>
                                </div>
                                <div class="form-group input-group">
                                    <span class="input-group-addon"><i class="fa fa-lock"  ></i></span>
                                    <input type="password" name="password" class="form-control" placeholder="Password"/>
                                </div>
                                    <div class="form-group"></div>
                                    <button class="btn btn-primary" name="login_now">Login Now</button>
                            </form> 
                    </div>
                </div>
            </div>
        </div>                         
    </div>
    </div>        
</body>







<script src="assets/js/jquery-1.10.2.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/jquery.metisMenu.js"></script>
<script src="assets/js/custom.js"></script>

</body>
</html>