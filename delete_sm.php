<?php
		mysql_connect("localhost","root","");
		mysql_select_db("hos");

		if(isset($_GET['id'])){
		$nama_sm = $_GET['id'];
		$delete = "DELETE FROM studio_musik WHERE id_sm='$nama_sm'";

		mysql_query($delete);
		if (!$delete)
		  {
		  die('ERROR: ' . mysql_error());
		  }
		  else {
		  header('location:studiomusik.php');
		  }
	 
	 }
?>