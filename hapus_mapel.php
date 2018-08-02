
<?php
	include "koneksi.php";
	$id = $_GET['id'];
	mysqli_query($koneksi,"DELETE FROM mata_pelajaran WHERE id_mapel='$id'");
	header("location:mapel.php");
?>