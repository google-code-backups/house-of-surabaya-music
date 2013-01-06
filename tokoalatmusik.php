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
<title>member</title>
<style>
body
{
background-image:url('musik2.jpg');
background-repeat:no-repeat;
background-attachment:fixed;
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
</head>
<body>

    <img align="right" src="hos.jpg" width="270" height="300">
	<div class="hero-unit">
	<h1 style="color:khaki"><font face="impact">H O S</font></h1> 
    <p style="color:LemonChiffon "><font face="matura mt script capitals" size="6"><strong>House Of Surabaya Music</strong></font></p>
	</div>

	
    <div class="navbar">
	<div class="navbar-inner">
	<a class="brand">HOS</a>
	<ul class="nav">
	<li><a href="home.php">Home</a></li>
    <li><a href="studiomusik.php">Studio Musik</a></li>
	<li><a href="studiorecording.php">Studio Recording</a></li>
	<li class="active"><a href="tokoalatmusik.php">Toko Alat Musik</a></li>
	<li><a href="event.php">Upload Poster Event</a></li>
    <li><a href="logout_admin.php">Logout</a></li>
    </ul>
	</div>
	</div>

<center><hr><table border="1" width="100%" cellspacing="1" cellpadding="0" id="list">

<tr class="alt">
<th align="center"><b>Nama</b></th>
<th align="center"><b>Alamat</b></th>
<th align="center"><b>Wilayah</b></th>
<th align="center"><b>Telepon</b></th>
<th align="center"><b>Available Time</b></th>
<th align="center"><b>Catatan Tambahan</b></th>
<th align="center"><b>Action</b></th>
</tr>

<?
mysql_connect("localhost","root","");
mysql_select_db("hos");

@$namasm = $_POST['nama_sm'];
@$alamatsm = $_POST['alamat_sm'];
@$wilayahsm = $_POST['wilayah_sm'];
@$tlpnsm = $_POST['tlpn_sm'];
@$time = $_POST['available_time_sm'];
@$sewa = $_POST['sewa_pershift_sm'];
@$catatan = $_POST['catatan_tambahan'];

$cari="SELECT * FROM toko_alat_musik";
$hasil=mysql_query($cari);
while($data=mysql_fetch_row($hasil)){
		echo"<tr>

		<td>$data[1]</td>
		<td>$data[2]</td>
		<td>$data[3]</td>
		<td>$data[4]</td>
		<td>$data[5]</td>
		<td>$data[6]</td>
		<td><center><img src='del.jpg' width='40' height='40' onclick='del($data[0])' title='delete'></center></td>
			
		</tr>";
}

?>
</table>	
</br>

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
<script type="text/JavaScript">
function del(id){
var agree=confirm("Are you sure you want to delete this file?");
if(agree==true){
       window.location = 'delete_tam.php?id=' + id;
}
}
</script>
</body>
</html>