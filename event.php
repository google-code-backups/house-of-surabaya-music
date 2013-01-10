<?php
session_start();
if  (!isset($_SESSION['username'])){
	header('location:loginforadmin.php');
	exit;
	}
?>

<html>
<title>HOS</title>
<head>
	<link type"text/css" rel="stylesheet" href="css/bootstrap.css"/>
	
</head>
<body>

<style>
body
{
background-image:url('musik2.jpg');
background-repeat:no-repeat;
background-position:bottom right;
} 

</style>

    <img align="right" src="hos.jpg" width="270" height="300">
	<div class="hero-unit">
	<h1 style="color:khaki"><font face="impact">H O S</font></h1> 
    <p style="color:LemonChiffon "><font face="matura mt script capitals" size="6"><strong>House Of Surabaya Music</strong></font></p>
	</div>
	
    <div class="navbar navbar-inverse">
	<div class="navbar-inner">
	<a class="brand">HOS</a>
	<ul class="nav">
	<li><a href="home.php">Home</a></li>
    <li><a href="studiomusik.php">Studio Musik</a></li>
	<li><a href="studiorecording.php">Studio Recording</a></li>
	<li><a href="tokoalatmusik.php">Toko Alat Musik</a></li>
	<li class="active"><a href="event.php">Upload Poster Event</a></li>
    <li><a href="logout_admin.php">Logout</a></li>
    </ul>
	</div>
	</div>
	
<center><h3><font face="cambria">FORM UPLOAD POSTER</font></h3></center>
	<form class="well span5" method="post" action="upload_posterevent.php" enctype="multipart/form-data">
				
		<label><b><font face="cambria">Nama</font></b></label>
		<input type="text" class="span4" placeholder="Masukkan Nama Event disini..." name="namaevent" required="required"/><br/>
		
		<label><b><font face="cambria">Deskripsi</font></b></label>
		<input type="text" class="span4" placeholder="Masukkan Deskripsi Event disini..." name="deskripsi" required="required"/><br/>
		
		<label><b><font face="cambria">Tanggal</font></b></label>
		<input type="date" class="span4" name="tanggal" required="required"/><br/>
	
		<label><b><font face="cambria">Tempat</font></b></label>
		<input type="text" class="span4" placeholder="Masukkan Tempat Event disini..." name="tempat" required="required"/><br/>
		
		<label><b><font face="cambria">Catatan Tambahan</font></b></label>
		<textarea class="span4" rows="6" name="catatan" placeholder="Masukkan catatan tambahan mengenai event disini..." required="required"></textarea><br/>

		<label><b><font face="cambria">Poster Event (.jpeg/.png, max. 5 MB)</font></b></label>
		<input type="file" name="posterevent" accept="image/*">
	
		</br>
		</br>
		<button class="btn btn-primary" type="submit">Publikasikan Poster</button>
		<button class="btn" type="reset">Reset</button>
	</form>

	<!-- Footer-->
	<footer class="footer">
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
	  <br>
 	  <br>
	  <br>
	  <br>
   	  <br>
	  <br>
	  <br>
      <div class="span12">
        <center>© 2012 House Of Surabaya Music. All rights reserved.</center>
      </div>
    </footer>
	
<script src="js/bootstrap.js"></script>
</body>
</html>