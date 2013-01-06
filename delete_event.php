<?php
		mysql_connect("localhost","root","");
		mysql_select_db("hos");

		if(isset($_GET['id'])){
		$nama_event = $_GET['id'];
		$delete = "DELETE FROM event WHERE id_event='$nama_event'";

		mysql_query($delete);
		if (!$delete)
		  {
		  die('ERROR: ' . mysql_error());
		  }
		  else {
		  header('location:home.php');
		  }
	 
	 }
?>