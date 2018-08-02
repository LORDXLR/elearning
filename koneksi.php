    <?php
         global $koneksi;
         $nameserver = "localhost";
         $username   = "root";
         $password   = "";
         $database      = "admin";
         $koneksi = mysqli_connect($nameserver,$username,$password,$database);
              if(!$koneksi) {
              die("Koneksi Gagal".mysqli_connect_error());
         }
    ?>