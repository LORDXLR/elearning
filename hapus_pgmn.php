
<?php
	include "koneksi.php";
	$id = $_GET['id'];
	mysqli_query($koneksi,"DELETE FROM pengumuman WHERE id_pgmn='$id'");
	header("location:pengumuman.php");
?>