<?php
@$id = $_GET['id'];
?>
<html>
<head>
	<link type"text/css" rel="stylesheet" href="css/bootstrap.css"/>
<title>home</title>
<style>
body {
		background-image:url('musik2.jpg');
		background-repeat:no-repeat;
		background-position:bottom right;
	} 
</style>
<body>
</head>

    <img align="right" src="hos.jpg" width="270" height="300">
	<div class="hero-unit">
	<h1 style="color:khaki"><font face="impact">H O S</font></h1> 
    <p style="color:LemonChiffon "><font face="matura mt script capitals" size="6"><strong>House Of Surabaya Music</strong></font></p>
	</div>
			
	<div class="navbar navbar-inverse">
	<div class="navbar-inner">
	<a class="brand">HOS</a>
	<ul class="nav">
    <li class="active"><a href="studiorecordingmember.php?id=<?php echo $id; ?>">My Profile</a></li>
	<li><a href="postermember_sr.php?id=<?php echo $id; ?>">Event Musik Surabaya</a></li>
	<li><a href="logout.php">Logout</a></li>
    </ul>
	</div>
	</div>

	<center><h3><font face="cambria">EDIT PROFILE</font></h3></center>
	
	<form class="well span5" method="post" action="edit_sr.php?id=<?php echo $id; ?>">
		
		<label><b>Nama Studio Recording</b></label>
		<input type="text" class="span5" placeholder="Type here..." name="nama" required="required"/><br/>
		
		<label><b>Alamat Studio Recording</b></label>
		<input type="text" class="span5" placeholder="Type here..." name="alamat" required="required"/><br/>
		
		<label><b>Wilayah Studio Recording</b></label>
		<label class="radio">
		<input type="radio" name="wilayah" id="optionRadios1" value="Utara">Utara
		</label>
		<input type="radio" name="wilayah" id="optionRadios1" value="Timur">Timur
		</label></br>
		<input type="radio" name="wilayah" id="optionRadios1" value="Barat">Barat
		</label></br>
		<input type="radio" name="wilayah" id="optionRadios1" value="Selatan">Selatan
		</label></br>
		
		<label><b>Telepon</b></label>
		<input type="text" class="span5" placeholder="Type here..." name="telepon" required="required"/><br/>
		
		<label><b>Available Time</b></label>
		<input type="text" class="span5" placeholder="Type here..." name="time" required="required"/><br/>
		
		<label><b>Sewa Per Shift</b></label>
		<input type="text" class="span5" placeholder="Type here..." name="sewa" required="required"/><br/>
		
		<label><b>Note</b></label>
		<textarea class="span5" rows="6" id="catatan_tambahan" name="note"></textarea>
		
		<br/>
		<button class="btn btn-primary" type="submit">Save</button>
		<button class="btn" type="reset">Reset</button>
	</form>
		
	
		<script src="js/bootstrap.js"></script>
</body>

    <!-- Footer-->
	<footer class="footer">
	
      <div class="span12">
        <center>© 2012 House Of Surabaya Music. All rights reserved.</center>
      </div>
    </footer>
</html>