<?php
		mysql_connect("localhost","root","");
		mysql_select_db("hos");

		if(isset($_GET['id'])){
		$nama_tam = $_GET['id'];
		$delete = "DELETE FROM toko_alat_musik WHERE id_tam='$nama_tam'";

		mysql_query($delete);
		if (!$delete)
		  {
		  die('ERROR: ' . mysql_error());
		  }
		  else {
		  header('location:tokoalatmusik.php');
		  }
	 
	 }
?>