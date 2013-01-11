<?php
@$id = $_GET[id];
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
    <li class="active"><a href="formstudiorecording.php">Studio Recording</a></li>
	<li><a href="logout.php">Logout</a></li>
    </ul>
	</div>
	</div>

<h4> &nbsp; &nbsp; Silahkan Isi Informasi Studio Recording Anda</h4>
		<form class="well span3" method="post" action="insertstudiorecording.php?id=<?php echo $id; ?>">
		
		<label><b>Nama Studio Recording</b></label>
		<input type="text" class="span3" placeholder="Type here..." name="nama_sr" required="required"/><br/>
		
		<label><b>Alamat Studio Recording</b></label>
		<input type="text" class="span3" placeholder="Type here..." name="alamat_sr" required="required"/><br/>
		
		<label><b>Wilayah Studio Recording</b></label>
		<label class="radio">
		<input type="radio" name="wilayah_sr" id="optionRadios1" value="Utara">Utara
		</label>
		<input type="radio" name="wilayah_sr" id="optionRadios1" value="Timur">Timur
		</label></br>
		<input type="radio" name="wilayah_sr" id="optionRadios1" value="Barat">Barat
		</label></br>
		<input type="radio" name="wilayah_sr" id="optionRadios1" value="Selatan">Selatan
		</label></br>
		<label><b>Telepon</b></label>
		<input type="text" class="span3" placeholder="Type here..." name="tlpn_sr" required="required"/><br/>
		
		<label><b>Available Time</b></label>
		<input type="text" class="span3" placeholder="Type here..." name="available_time_sr" required="required"/><br/>
		
		<label><b>Sewa Per Shift</b></label>
		<input type="text" class="span3" placeholder="Type here..." name="sewa_pershift_sr" required="required"/><br/>
		
		<label><b>Catatan Tambahan</b></label>
		<textarea class="span3" rows="6" id="catatan_tambahan_sr" name="catatan_tambahan_sr"></textarea>
		
		<br/>
		<button class="btn btn-primary" type="submit">Save</button>
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