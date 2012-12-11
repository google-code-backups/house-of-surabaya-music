<html>
<head>
	<link type"text/css" rel="stylesheet" href="css/bootstrap.css"/>
<title>home</title>
<style>
body
{
background-image:url('music.jpg');
background-repeat:no-repeat;
background-attachment:fixed;
background-position:bottom left;
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
<div class="hero-unit">
    <h1 style="color:white">HOS<img align="right" src="linux.jpg" alt="Smiley face" width="200" height="200"></h1> 
    <p style="color:yellow">
	House Of Surabaya Music
	</p>
	</div>
			
	 <div class="navbar">
	<div class="navbar-inner">
	<a class="brand" href="login.php">HOS</a>
	<ul class="nav">
	<li><a href="studiomusikguest.php">Studio Musik</a></li>
	<li><a href="studiorecordingguest.php">Studio Recording</a></li>
	<li><a href="tokoalatmusikguest.php">Toko Alat Musik</a></li>
	<li><a href="eventguest.php">Upload Poster Event</a></li>
    </ul>
	</div>
	</div>
	
		<form class="form-search pull-right" method="post" action="search_exe.php">
		<input name="name" type="text" class="input-medium search-query">
		<button type="submit" class="btn">Search</button>
		</form></br>
	
<center><hr><table border="1" width="100%" cellspacing="1" cellpadding="0" id="list">
<center><h2>Hasil Pencarian</h2></center>
<tr class="alt">
<th align="center"><b>Nama</b></th>
<th align="center"><b>Alamat</b></th>
<th align="center"><b>Wilayah</b></th>
<th align="center"><b>Telepon</b></th>
<th align="center"><b>Available Time</b></th>
<th align="center"><b>Sewa Per Shift</b></th>
</tr>	

<?php
mysql_connect("localhost","root","");
mysql_select_db("hos");

@$name= $_POST['name']; 
$q = "SELECT * from studio_musik where nama_sm like '%$name%' "; 
$r = "SELECT * from studio_recording where nama_sr like '%$name%' "; 
$t = "SELECT * from toko_alat_musik where nama_tam like '%$name%' "; 

$resultq = mysql_query($q);
$resultr = mysql_query($r);
$resultt = mysql_query($t);   

if($dataq=mysql_fetch_row($resultq)){
		echo"<tr>
		<td>$dataq[1]</td>
		<td>$dataq[2]</td>
		<td>$dataq[3]</td>
		<td>$dataq[4]</td>
		<td>$dataq[5]</td>
		<td>$dataq[6]</td>
		</tr>";
		}

	else if($datar=mysql_fetch_row($resultr)){
		echo"<tr>
		<td>$datar[1]</td>
		<td>$datar[2]</td>
		<td>$datar[3]</td>
		<td>$datar[4]</td>
		<td>$datar[5]</td>
		<td>$datar[6]</td>
		</tr>";
		}
		
	else if($datat=mysql_fetch_row($resultt)){
		echo"<tr>
		<td>$datat[1]</td>
		<td>$datat[2]</td>
		<td>$datat[3]</td>
		<td>$datat[4]</td>
		<td>$datat[5]</td>
		<td>$datat[6]</td>
		</tr>";
		}
		
	else{
		echo "<script>alert('No result! !');
			javascript:history.go(-1);</script>";
			}
	
?>
</table>

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