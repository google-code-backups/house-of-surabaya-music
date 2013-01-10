<html>
<head>
	<link type"text/css" rel="stylesheet" href="css/bootstrap.css"/>
<title>member</title>
<style>
body
{
background-image:url('musik2.jpg');
background-repeat:no-repeat;
background-position:bottom left;
} 
</style>
</head>
<body>

    <img align="right" src="hos.jpg" width="270" height="300">
	<div class="hero-unit">
	<h1 style="color:khaki"><font face="impact">H O S</font></h1> 
    <p style="color:LemonChiffon "><font face="matura mt script capitals" size="6"><strong>House Of Surabaya Music</strong></font></p>
	</div>
	
    <div class="navbar navbar-inverse">
	<div class="navbar-inner">
	<a class="brand" href="login.php">HOS</a>
	<ul class="nav">
	<li><a href="studiomusikguest.php">Studio Musik</a></li>
	<li><a href="studiorecordingguest.php">Studio Recording</a></li>
	<li><a href="tokoalatmusikguest.php">Toko Alat Musik</a></li>
	<li class="active"><a href="eventguest.php">Upload Poster Event</a></li>
    </ul>
	</div>
	</div>
	
	<div class="container-fluid">
    <div class="row-fluid">
	
		<div class="span8">
		<h3><font face="cambria">&nbsp; &nbsp; FORM UPLOAD POSTER</font></h3>
		<form class="well span6" method="post" action="upload_posterguest.php">
				
		<label><b><font face="cambria">Nama</font></b></label>
		<input type="text" class="span9" placeholder="Masukkan Nama Event disini..." name="namaevent" required="required"/><br/>
		
		<label><b><font face="cambria">Deskripsi</font></b></label>
		<input type="text" class="span9" placeholder="Masukkan Deskripsi Event disini..." name="deskripsi" required="required"/><br/>
		
		<label><b><font face="cambria">Tanggal</font></b></label>
		<input type="date" class="span9" name="tanggal" required="required"/><br/>
	
		<label><b><font face="cambria">Tempat</font></b></label>
		<input type="text" class="span9" placeholder="Masukkan Tempat Event disini..." name="tempat" required="required"/><br/>
		
		<label><b><font face="cambria">Catatan Tambahan</font></b></label>
		<textarea class="span9" rows="6" name="catatan" placeholder="Masukkan catatan tambahan mengenai event disini..." required="required"></textarea><br/>

		<label><b><font face="cambria">Poster Event (.jpeg/.png, max. 5 MB)</font></b></label>
		<input type="file" class="span9" name="posterevent" accept="image/*">
	
		</br>
		</br>
		<button class="btn btn-primary" type="submit">Publikasikan Poster</button>
		<button class="btn" type="reset">Reset</button>
	</form>
			
		</div>
		
    <div class="span4">
		<form align="right" class="form-search pull-right" method="post" action="search_exe.php">
				<input name="name" type="text" class="input-medium search-query" placeholder="Search for...">
				<button type="submit" class="btn">Go</button>
				</form></br>
				</div>
				</div>
				</div>
	


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
</br><script src="js/bootstrap.js"></script>
</body>
</html>