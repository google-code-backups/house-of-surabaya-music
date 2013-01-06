<?php
		mysql_connect("localhost","root","");
		mysql_select_db("hos");

		if(isset($_GET['id'])){
		$nama_sr = $_GET['id'];
		$delete = "DELETE FROM studio_recording WHERE id_sr='$nama_sr'";

		mysql_query($delete);
		if (!$delete)
		  {
		  die('ERROR: ' . mysql_error());
		  }
		  else {
		  header('location:studiorecording.php');
		  }
	 
	 }
?>