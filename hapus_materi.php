
<?php
	include "koneksi.php";
	$id = $_GET['id'];
	mysqli_query($koneksi,"DELETE FROM materi WHERE id_materi='$id'");
	header("location:list_materi.php");
?>