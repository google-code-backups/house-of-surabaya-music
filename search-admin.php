<?php
session_start();
if  (!isset($_SESSION['username'])){
	header('location:loginforadmin.php');
	exit;
	}
	
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
	<li><a href="event.php">Upload Poster Event</a></li>
	<li><a href="logout_admin.php">Logout</a></li>
   
    </ul>
	</div>
	</div>
		
		<form align="right" class="form-search pull-right" method="post" action="search-admin.php">
		<input name="name" type="text" class="input-medium search-query" placeholder="Search for...">
		<button type="submit" class="btn">Go</button>
		</form></br>

		
<center><hr><table border="1" width="100%" cellspacing="1" cellpadding="0" id="list">
<center><h2><font face="cambria">Hasil Pencarian </font></h2></center>
<tr class="alt">
<th align="center"><b>Nama</b></th>
<th align="center"><b>Alamat</b></th>
<th align="center"><b>Wilayah</b></th>
<th align="center"><b>Telepon</b></th>
<th align="center"><b>Jam Buka</b></th>
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
		
			elseif($datar=mysql_fetch_row($resultr)){
			echo"<tr>
			<td>$datar[1]</td>
			<td>$datar[2]</td>
			<td>$datar[3]</td>
			<td>$datar[4]</td>
			<td>$datar[5]</td>
			<td>$datar[6]</td>
			</tr>";
			}
				
				elseif($datat=mysql_fetch_row($resultt)){
				echo"<tr>
				<td>$datat[1]</td>
				<td>$datat[2]</td>
				<td>$datat[3]</td>
				<td>$datat[4]</td>
				<td>$datat[5]</td>
				<td><center>-</center></td>
				</tr>";
				}
		else {	
			echo "<script>alert('Mohon maaf, data yang Anda cari tidak ditemukan');
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