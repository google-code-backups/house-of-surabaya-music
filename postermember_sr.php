<?php

include "session.php";
@$id = $_GET['id'];

?>
<html>
<head>
	<link type"text/css" rel="stylesheet" href="css/bootstrap.css"/>
<title>home</title>
<style>
body
{
background-image:url('musik2.jpg');
background-repeat:no-repeat;
background-position:bottom right;
} 

#list
{
font-family:"Cambria";
width:70%;
border-collapse:collapse;
}
#list td, #list th 
{
font-size:1em;
border:2px solid black;
padding:3px 7px 2px 7px;
}
#list th 
{
font-size:1.1em;
text-align:center;
padding-top:5px;
padding-bottom:4px;
background-color:#B0E0E6;
color:black;
}
#list tr.alt td 
{
color:white;
background-color:#EAF2D3;
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
	<li><a href="studiorecordingmember.php?id=<?php echo $id; ?>">My Profile</a></li>
	<li class="active"><a href="postermember_sr.php?id=<?php echo $id; ?>">Event Musik Surabaya</a></li>
	<li><a href="logout.php">Logout</a></li>
    </ul>
	</div>
	</div>
		
	<div class="container-fluid">
    <div class="row-fluid">
    <div class="span6">
    <!--Sidebar content-->
	&nbsp; <h3><font face="cambria">TAMBAH EVENT MUSIK</font></h3>
	<form class="well span8" method="post" action="upload_postermembersr.php" enctype="multipart/form-data">
		
		<label><b>Nama</b></label>
		<input type="text" class="span10" placeholder="Type Nama here..." name="namaevent" required="required"/><br/>
		
		<label><b>Deskripsi</b></label>
		<input type="text" class="span10" placeholder="Type Deskripsi here..." name="deskripsi" required="required"/><br/>
		
		<label><b>Tanggal</b></label>
		<input type="text" class="span10" placeholder="Type Tanggal here..." name="tanggal" required="required"/><br/>
	
		<label><b>Tempat</b></label>
		<input type="text" class="span10" placeholder="Type Tempat here..." name="tempat" required="required"/><br/>
		
		<label><b>Catatan Tambahan</b></label>
		<textarea class="span10" rows="6" name="catatan" placeholder="Type Catatan Tambahan Here..." required="required"></textarea><br/>

		<label><b>Upload Poster Event</b></label>
		<input type="file" name="posterevent" accept="image/*">
	
		<br/>
		<button class="btn btn-primary" type="submit">Add</button>
		<button class="btn" type="reset">Reset</button>
	</form>
    </div>
    
	<div class="span6" method="post" action="tampilevent.php">
    <center><h3><font face="cambria">EVENT MUSIK SURABAYA</font></h3></center>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<center><hr><table border="1" width="100%" cellspacing="1" cellpadding="0" id="list">
<tr class="alt">
<th align="center"><b>Nama</b></th>
<th align="center"><b>Deskripsi</b></th>
<th align="center"><b>Tanggal</b></th>
<th align="center"><b>Tempat</b></th>
<th align="center"><b>Poster</b></th>
<th align="center"><b>Catatan Tambahan</b></th>

</tr>

<?php
mysql_connect("localhost","root","");
mysql_select_db("hos");
$cari="SELECT * FROM event";
$hasil=mysql_query($cari);
while($data=mysql_fetch_row($hasil)){
		echo"<tr>

		<td><center>$data[1]</center></td>
		<td><center>$data[2]</center></td>
		<td><center>$data[3]</center></td>
		<td><center>$data[4]</center></td>
		<td align=center><img src='$data[5]'></td>
		<td><center>$data[6]</center></td>
		</tr>";
	}

?>
</table>	

	</div>
    </div>
    </div>
	
	<script src="js/bootstrap.js"></script>
</body>



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
      <div class="span12">
        <center>© 2012 House Of Surabaya Music. All rights reserved.</center>
      </div>
    </footer>


</html>