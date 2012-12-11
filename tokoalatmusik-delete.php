<?
include "session.php";
?>
<html>
<title>HOS</title>
<head>
	<link type"text/css" rel="stylesheet" href="css/bootstrap.css"/>
	
</head>
<body>

  <div class="hero-unit">
    <h1 style="color:white">HOS<img align="right" src="linux.jpg" alt="Smiley face" width="200" height="200"></h1> 
    <p style="color:yellow">
	House Of Surabaya Music
	</p>
	</div>
	
    <div class="navbar">
	<div class="navbar-inner">
	<a class="brand">HOS</a>
	<ul class="nav">
	<li><a href="home.php">Home</a></li>
    <li><a href="studiomusik.php">Studio Musik</a></li>
	<li  class="active"><a href="studiorecording.php">Studio Recording</a></li>
	<li><a href="tokoalatmusik.php">Toko Alat Musik</a></li>
    <li><a href="event.html">Upload Poster Event</a></li>
	<li><a href="logout.php">Logout</a></li>
    </ul>
	</div>
	</div>
	
<style>
body
		{
		background-image:url('music.jpg');
		background-repeat:no-repeat;
		background-attachment:fixed;
		background-position:bottom right;
		}
</style>

		<?
		mysql_connect("localhost","root","");
		mysql_select_db("hos");

		$nama_tam = $_POST['nama_tam'];
		$delete = "DELETE FROM toko_alat_musik WHERE nama_tam='$nama_tam'";

		mysql_query($delete);
		if (!$delete)
		  {
		  die('ERROR: ' . mysql_error());
		  }
		  else {
		  header('location:tokoalatmusik.php');
		  }
		?>


<script src="js/bootstrap.js"></script>
</body>
</html>